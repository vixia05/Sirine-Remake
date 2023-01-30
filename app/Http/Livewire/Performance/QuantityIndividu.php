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

    // public function
}
