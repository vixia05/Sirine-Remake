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
        $data = QcPikai::where('np_user',$this->npUser)
                       ->whereBetween('tgl_verif',[$this->startDate,$this->endDate])
                       ->paginate(10);

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
                            ->orderBy('tgl_verif')
                            ->pluck('jml_verif','tgl_verif');

        $this->labels     = array_keys($mainData->toArray());
        $this->dataset    = [
                            [
                                'label' => "Hasil Verif",
                                'backgroundColor' => 'rgba(59, 130, 246, 1)',
                                'borderColor' => 'rgba(15,64,97,255)',
                                'data' => $mainData->values(),
                            ],
                        ];

        $yearData  = [
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',1)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',2)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',3)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',4)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',5)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',6)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',7)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',8)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',9)->sum('jml_verif') ,
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',10)->sum('jml_verif'),
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',11)->sum('jml_verif'),
                        QcPikai::where('np_user',$this->npUser)->whereYear('tgl_verif',carbon::now())->whereMonth('tgl_verif',12)->sum('jml_verif'),
                     ];

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
}
