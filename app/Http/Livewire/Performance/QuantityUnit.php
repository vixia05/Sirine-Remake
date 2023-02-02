<?php

namespace App\Http\Livewire\Performance;

use Auth;
use Carbon\Carbon;

use App\Models\Unit;
use App\Models\QcPikai;
use App\Models\OrderPcht;
use App\Models\UserDetails;
use App\Models\workstation;

use Livewire\Component;

class QuantityUnit extends Component
{
    public $teamList;
    public $mode;
    public $startDate,$endDate;
    public $team;

    public array $dataset = [];
    public array $labels = [];

    public function mount()
    {
        $this->startDate = Carbon::today()->startOfMonth();
        $this->endDate   = Carbon::today();
        $this->team      = 0;
    }

    public function render()
    {
        // $this->startDate = Carbon::now()->startOfMonth();
        // $this->endDate   = Carbon::now();

        $this->teamList = workstation::where('id_unit',4)
                            ->orderBy('workstation')
                            ->get();

        return view('livewire.performance.quantity-unit',[
            'teamList' => $this->teamList,
        ]);
    }

    public function dataChart()
    {
        // Chart Jika Urutan Berdasarkan Pencapaian Target
        if($this->mode == 0)
         {
            $data = $this->qtyPencapaian();
         }

        // Chart Jika Urutan Berdasarkan Hasil Verifikasi
        elseif($this->mode == 1)
         {
            $data = $this->qtyVerifikasi();
         }

        $labels = array_keys($data->toArray());

        $dataset = [
            [
                'label' => $this->mode(),
                'backgroundColor' => 'rgba(59, 130, 246, 1)',
                'borderColor' => 'rgba(15,64,97,255)',
                'data' => $data->values(),
            ],
        ];

        $this->emit('updateChart', [
            'datasets' => $dataset,
            'labels' => $labels,
        ]);
    }

    public function mode()
    {
        if($this->mode == 0)
        {
            return "Performance Target";
        }
        elseif($this->mode == 1)
        {
            return "Jumlah Verifikasi";
        }
    }


    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Target
     */
    private function qtyPencapaian()
    {
        $team   = $this->team;
        $endDate = $this->endDate;
        $startDate = $this->startDate;

        $data  = QcPikai::where('id_workstation',$this->team)
                        ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($npGroup){
                            $groupBy = $npGroup->sortBy('tgl_verif')
                                               ->groupBy('tgl_verif')
                                               ->map(function($sum){
                                                /** Menentukan WIP */
                                                    // Subtotal Jumlah Cetak Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $getTglOBC = OrderPcht::where('mesin','!=','TGN-1032');

                                                        $sumCetakPcht = $getTglOBC->whereBetween('tgl_cetak',[
                                                                                                                Carbon::parse($this->startDate)->startOfMonth(),
                                                                                                                Carbon::parse($sum['0']['tgl_verif'])
                                                                                                                ->subdays(1)
                                                                                                            ])
                                                                                                            ->sum('jml_cetak');

                                                    // Subtotal Jumlah Baik Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $baikVerifPcht = $getTglOBC->whereBetween('tgl_verif',[
                                                                                                                Carbon::parse($this->startDate)->startOfMonth(),
                                                                                                                Carbon::parse($sum['0']['tgl_verif'])
                                                                                                                ->subdays(1)
                                                                                                                ])
                                                                                   ->sum('hcs_verif');

                                                    // Subtotal Jumlah Rusak Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $rusakVerifPcht = $getTglOBC->whereBetween('tgl_verif',[
                                                                                                                Carbon::parse($this->startDate)->startOfMonth(),
                                                                                                                Carbon::parse($sum['0']['tgl_verif'])
                                                                                                                ->subdays(1)
                                                                                                                ])
                                                                                    ->sum('hcts_verif');

                                                    // Rumus WIP, WIP = Total Cetak - Baik Periksa + Rusak Periksa
                                                    $wip = $sumCetakPcht - ($baikVerifPcht + $rusakVerifPcht);

                                                /** End Menentukan WIP */

                                                /** Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */
                                                    // Default Value Untuk Target Pcht
                                                        // $targetPcht = 15000;

                                                    // Menentukan Target Berdasarkan WIP Harian
                                                        // if ($wip < 760000 && $wip > 100000)
                                                        // {
                                                        //     if($sum['0']['lembur'] == 1)
                                                        //     {
                                                        //         $targetPcht = ($wip / 760000) * 20000;
                                                        //     }
                                                        //     elseif($sum['0']['lembur'] == 2)
                                                        //     {
                                                        //         $targetPcht = ($wip / 760000) * 22500;
                                                        //     }
                                                        //     elseif($sum['0']['lembur'] == 2)
                                                        //     {
                                                        //         $targetPcht = ($wip / 760000) * 27500;
                                                        //     }
                                                        //     else
                                                        //     {
                                                        //         $targetPcht = ($wip / 760000) * 15000;
                                                        //     }
                                                        // }
                                                        // else
                                                        // {
                                                            // $targetPcht = $sum->sum('target');
                                                        // }
                                                        $targetPcht = $sum->sum('target');


                                                /** End Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */

                                                    $hasilPcht  = $sum->sum('jml_verif');

                                                    //** Tambah Count Izin Disini <- */
                                                    $persenPcht = $targetPcht == 0 ? 0 : $hasilPcht / $targetPcht * 100;
                                                    $resultInd = 100;
                                                    if($wip > 250000)
                                                    {
                                                        if ($persenPcht < 100 && $persenPcht > 50)
                                                        {
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc') / 18) * 50);
                                                        }

                                                        elseif ($persenPcht < 100 && $persenPcht < 50)
                                                        {
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc')/18) * 100);
                                                        }

                                                        elseif ($persenPcht > 100)
                                                        {
                                                            if($sum->sum('jml_obc') > 8)
                                                            {
                                                                $resultInd = $persenPcht + ((($sum->sum('jml_obc') - 8) / 18) * 50);
                                                            }
                                                            else
                                                            {
                                                                $resultInd = $persenPcht;
                                                            }
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $resultInd = 100;
                                                    }
                                                    return $resultInd;
                                               });
                            $result = $groupBy->avg();
                            return round($result,2);
                        })
                        ->sortDesc()
                        ;
        // dd($data);
        return $data;
    }
}
