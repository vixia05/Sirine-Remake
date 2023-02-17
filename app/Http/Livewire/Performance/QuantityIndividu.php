<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use Helper;
use Carbon\Carbon;
use App\Models\QcPikai;
use App\Models\Workstation;
use App\Models\UserDetails;


class QuantityIndividu extends Component
{
    use WithPagination;

    public $npUser;
    public $listTeam,$team,$listNp;
    public $startDate,$endDate;

    public array $dataset = [];
    public array $labels = [];

    public function mount()
    {
        $this->startDate = Carbon::today()->startOfMonth();
        $this->endDate   = Carbon::today();
        $this->listTeam  = Workstation::orderBy('workstation')->get();
        $this->listNp    = [];
        if(Helper::getRole() < 2)
        {
            $this->team = Helper::getWorkstation();
            $this->npUser = Auth::user()->np;
            $this->mainChart();
        }
        else
        {
            //
        }
    }

    public function render()
    {
        $data = $this->tableData();

        return view('livewire.performance.quantity-individu',
                    [
                        'data'  => $data,
                        'listNp'    => $this->listNp,
                        'listTeam'  => $this->listTeam,
                    ]);
    }

    public function listsNp()
    {
        $this->listNp = UserDetails::where('id_workstation',$this->team)->orderBy('nama')->get();
    }

    public function clearField()
    {
        $this->team = '';
        $this->listNp = [];
        $this->npUser = '';
        $this->endDate = Carbon::now();
        $this->startDate   = Carbon::now();
    }

    public function mainChart()
    {
        $mainData  = QcPikai::where('np_user',$this->npUser)
                            ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                            ->orderBy('tgl_verif');

        $jmlVerif    = $mainData->pluck('jml_verif','tgl_verif');
        $targetVerif = $mainData->pluck('target','tgl_verif');

        $this->labels     = array_keys($jmlVerif->toArray());
        $this->dataset    = [
                            [
                                'type'  => "line",
                                'label' => "Target",
                                'backgroundColor' => 'rgba(16,185,129,0)',
                                'borderColor' => 'rgba(52,211,153,2)',
                                'data' => $targetVerif->values(),
                            ],
                            [
                                'label' => "Hasil Verif",
                                'backgroundColor' => 'rgba(59, 130, 246, 1)',
                                'borderColor' => 'rgba(15,64,97,255)',
                                'pointHoverBackgroundColor' => '#fff',
                                'data' => $jmlVerif->values(),
                            ],
                        ];

        for($i = 1 ; $i < 13 ; $i++)
        {
            $yearData[] = QcPikai::where('np_user',$this->npUser)
                                 ->whereYear('tgl_verif',carbon::parse($this->startDate))
                                 ->whereMonth('tgl_verif',$i)
                                 ->sum('jml_verif');
        }

        $yearLabels     = [
                            "Jan",
                            "Feb",
                            "Mar",
                            "Apr",
                            "Mei",
                            "Jun",
                            "Jul",
                            "Agu",
                            "Sep",
                            "Okt",
                            "Nov",
                            "Des",
                          ];
        $yearDataset    = [
                            [
                                'label' => "Hasil Verif",
                                'backgroundColor' => 'rgba(59, 130, 246, 1)',
                                'borderColor' => 'rgba(15,64,97,255)',
                                'data' => $yearData,
                            ],
                        ];

        $this->emit('updateMainChart', [
            'datasets' => $this->dataset,
            'labels' => $this->labels,
        ]);

        $this->emit('updateYearChart', [
            'datasets' => $yearDataset,
            'labels' => $yearLabels,
        ]);

        $this->resetpage();
    }

    public function tableData()
    {
        $data = QcPikai::where('np_user',$this->npUser)
                    ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                    ->orderBy('jenis','desc')
                    ->orderBy('tgl_verif')
                    ->paginate(10);

        return $data;

        // $data = QcPikai::where('np_user',"I444")
        //                ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
        //                ->orderBy('jenis','desc')
        //                ->orderBy('tgl_verif')
        //                ->paginate(10)
        //                ->groupBy('tgl_verif')
        //                ->getCollection()
        //                ->through(function($dataTable,$key){

        //                     // Tgl Verifikasi
        //                     $tglVerif    = $dataTable->unique('tgl_verif')[0]['tgl_verif'];

        //                     // Np Pegawai
        //                     $npPegawai   = $this->npUser;

        //                     // Nama Pegawai
        //                     $namaPegawai = UserDetails::where('np_user',$this->npUser)
        //                                               ->value('nama');

        //                     // Jumlah Verifikasi Pcht
        //                     $verifPcht   = $dataTable->where('jenis',"PCHT")
        //                                              ->sum('jml_verif');

        //                     // Jumlah Verifikasi MMEA
        //                     $verifMmea   = $dataTable->where('jenis',"MMEA")
        //                                              ->sum('jml_verif');

        //                     // Jumlah OBC PCHT
        //                     $obcPcht     = $dataTable->where('jenis',"PCHT")
        //                                              ->sum('jml_obc');

        //                     // Jumlah OBC MMEA
        //                     $obcMmea     = $dataTable->where('jenis',"MMEA")
        //                                              ->sum('jml_obc');

        //                     // Target Harian PCHT
        //                     $targetPcht  = $dataTable->where('jenis',"PCHT")
        //                                              ->sum('target');

        //                     // Target Harian MMEA
        //                     $targetMmea  = $dataTable->where('jenis',"Mmea")
        //                                              ->sum('target');

        //                     // Lembur
        //                     $lembur = $dataTable->unique('tgl_verif')[0]['lembur'];

        //                     // Keterangan
        //                     $keterangan = $dataTable->unique('tgl_verif')[0]['keterangan'];

        //                     return [
        //                         'tglVerif'  => $tglVerif,
        //                         'npPegawai' => $npPegawai,
        //                         'namaPegawai' => $namaPegawai,
        //                         'verifPcht' => $verifPcht,
        //                         'verifMmea' => $verifMmea,
        //                         'obcPcht'   => $obcPcht,
        //                         'obcMmea'   => $obcMmea,
        //                         'targetPcht'=> $targetPcht,
        //                         'targetMmea'=> $targetMmea,
        //                         'lembur'    => $lembur,
        //                         'keterangan'=> $keterangan,
        //                     ];
        //                });

        //             //    dd($data);
        // return $data;
    }

    public function dataMmea($tglVerif)
    {
        return QcPikai::where('np_user',$this->npUser)
                      ->where('jenis',"MMEA")
                      ->where('tgl_verif',$tglVerif)
                      ;
    }
}
