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
    public $team = 0;

    public array $dataset = [];
    public array $labels = [];

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

        $data  = QcPikai::where('id_station',$team)
                        ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($npGroup) use ($startDate){
                            $groupBy = $npGroup->sortBy('tgl_verif')
                                               ->groupBy('tgl_verif')
                                               ->map(function($sum) use ($startDate){
                                                /** Menentukan WIP */
                                                    // Subtotal Jumlah Cetak Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $sumCetakPcht = OrderPcht::where('mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_cetak',[Carbon::parse($startDate)->subdays(1),Carbon::parse($sum['0']['tgl_verif'])->subdays(1)])
                                                                                    ->sum('jml_cetak') ;
                                                                                    // dump($sumCetakPcht);

                                                    // Subtotal Jumlah Baik Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $baikVerifPcht = OrderPcht::where('mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_verif',[Carbon::parse($startDate)->subdays(1),Carbon::parse($sum['0']['tgl_verif'])->subdays(1)])
                                                                                    ->sum('hcs_verif');

                                                    // Subtotal Jumlah Rusak Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $rusakVerifPcht = OrderPcht::where('mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_verif',[Carbon::parse($startDate)->subdays(1),Carbon::parse($sum['0']['tgl_verif'])->subdays(1)])
                                                                                    ->sum('hcts_verif');

                                                    // Rumus WIP, WIP = Total Cetak - Baik Periksa + Rusak Periksa
                                                        $wip = $sumCetakPcht - ($baikVerifPcht + $rusakVerifPcht);

                                                /** End Menentukan WIP */

                                                /** Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */
                                                    // Default Value Untuk Target Pcht
                                                        $targetPcht = 15000;

                                                    // Menentukan Target Berdasarkan WIP Harian
                                                        if ($wip < 780000 && $wip > 100000)
                                                        {
                                                            $targetPcht = ($wip / 780000) * 15000;
                                                        }
                                                        else
                                                        {
                                                            $targetPcht = $sum->sum('target')*500;
                                                        }

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
