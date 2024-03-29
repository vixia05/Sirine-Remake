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

    private $data;
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
        $this->npUser    = Auth::user()->np;
        $this->listNp    = [];
        if(Helper::getRole() < 2)
        {
            $this->team = Helper::getWorkstation();
            $this->mainChart();
        }
        else
        {
            //
        }
    }

    public function render()
    {
        $this->tableData();

        return view('livewire.performance.quantity-individu.view',
                    [
                        'data'  => $this->data,
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
        $this->data = QcPikai::where('np_user',$this->npUser)
                            ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                            ->orderBy('jenis','desc')
                            ->orderBy('tgl_verif')
                            ->paginate(10);
    }

    public function dataMmea($tglVerif)
    {
        $data = QcPikai::where('np_user',$this->npUser)
                    ->where('jenis',"MMEA")
                    ->where('tgl_verif',$tglVerif);

        $percVerif = divnum($data->value('jml_verif'),$data->value('target')) * 100;

        return [
            'izin'      => $data->value('izin'),
            'lembur'    => $data->value('lembur'),
            'target'    => $data->value('target'),
            'jml_obc'   => $data->value('jml_obc'),
            'perc_verif'=> $percVerif,
            'jml_verif' => $data->value('jml_verif'),
            'keterangan'=> $data->value('keterangan'),
        ];
    }

    public function pencapaian($tglVerif)
    {
        $getPcht = QcPikai::where('np_user',$this->npUser)
                          ->where('tgl_verif',$tglVerif)
                          ->where('jenis',"PCHT");

        $getMmea = QcPikai::where('np_user',$this->npUser)
                          ->where('tgl_verif',$tglVerif)
                          ->where('jenis',"MMEA");

        $targetVerifPcht    = divnum($getPcht->sum('jml_verif'), $getPcht->sum('target')) * 100;
        $targetVerifMmea    = divnum($getMmea->sum('jml_verif'), $getMmea->sum('target')) * 100;
        $targetVerifHarian  = $targetVerifPcht + $targetVerifMmea;

        $targetObcPcht  = $getPcht->sum('jml_obc') == 0 ? 0 : ($getPcht->sum('jml_obc') < 8 ? 0 : (($getPcht->sum('jml_obc') - 6) / 18) * 100);

        $endTarget  = $targetVerifHarian >= 100 ? $targetVerifHarian : $targetVerifHarian + $targetObcPcht;

        $exceedLbrPcht  = $getPcht->sum('jml_verif') - $getPcht->sum('target');
        $exceedObcPcht  = $getPcht->sum('jml_obc')   - 18;

        $exceedLbrMmea  = $getMmea->sum('jml_verif') - $getMmea->sum('target');

        return [
            'endTarget' => $endTarget,
            'dailyTarget'   => $getPcht->sum('target') + $getMmea->sum('target'),
            'exceedLbrPcht' => $exceedLbrPcht,
            'exceedObcPcht' => $exceedObcPcht,
            'exceedLbrMmea' => $exceedLbrMmea,
        ];
    }

    public function subTotal()
    {

        $getPchtBetw    = QcPikai::where('np_user',$this->npUser)
                                 ->where('jenis',"PCHT")
                                 ->whereBetween('tgl_verif',[$this->startDate,$this->endDate]);

        $getMmeaBetw    = QcPikai::where('np_user',$this->npUser)
                                 ->where('jenis',"MMEA")
                                 ->whereBetween('tgl_verif',[$this->startDate,$this->endDate]);

        $avgPcht    = number_format($getPchtBetw->avg('jml_verif'),0);
        $avgMmea    = number_format($getMmeaBetw->avg('jml_verif'),0);
        $sumVerifPcht   = number_format($getPchtBetw->sum('jml_verif'),0);
        $sumVerifMmea   = number_format($getMmeaBetw->sum('jml_verif'),0);

        return [
            'avgPcht'   => $avgPcht,
            'avgMmea'   => $avgMmea,
            'sumVerifPcht'  => $sumVerifPcht,
            'sumVerifMmea'  => $sumVerifMmea,
        ];
    }
}
