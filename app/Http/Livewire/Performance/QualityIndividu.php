<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use Carbon\Carbon;

use Helper;
use App\Models\ReturPikai;
use App\Models\Workstation;
use App\Models\UserDetails;

class QualityIndividu extends Component
{
    use WithPagination;

    public $npUser;
    public $listTeam,$team,$listNp;
    public $year;
    public $mainDataset,$mainLabels;
    public $jenisDataset,$jenisLabels;

    public function render()
    {
        return view('livewire.performance.quality-individu.show',
                    [
                        'listNp'    => $this->listNp,
                        'listTeam'  => $this->listTeam,
                        'dataTable' => $this->dataTable(),
                        'jenisRetur'=> $this->jenisRetur(),
                    ]);
    }

    public function listsNp()
    {
        $this->listNp = UserDetails::where('id_workstation',$this->team)->orderBy('nama')->get();
    }

    public function mount()
    {

        if(Helper::getRole() < 2)
        {
            $this->team = Helper::getWorkstation();
            $this->npUser = Auth::user()->np;
            $this->dataMainChart(Carbon::now()->format('Y'));
        }
        else
        {
            //
        }
        $this->year = Carbon::now();
        $this->listTeam= Workstation::orderBy('workstation')->get();
        $this->listNp  = [];
        $this->mainLabels = [   'Januari',
                                'Febuari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                             ];
        $this->mainDataset = [
                                [
                                    'label' => 'Barang Retur',
                                    'data'=> $this->dataMainChart(Carbon::now()),
                                    'backgroundColor' => [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    'borderColor' => [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    'borderWidth' => '1'
                                ],
                            ];

        $this->jenisLabels = [
                'Blobor',
                'Hologram',
                'Miss Register',
                'Noda',
                'Plooi',
                'Blur',
                'Gradasi',
                'Terpotong',
                'Tipis',
                'Sobek',
                'Botak',
                'Tercampur',
                'Minyak',
                'Blanko',
                'Diecut',
        ];

        $this->jenisDataset = [
            [
                'label' => $this->jenisLabels,
                'data'=> $this->dataJenisChart(Carbon::now())['dataUni'],
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                'borderColor' => [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                'borderWidth' => '1'
            ],
        ];
    }

    public function dataMainChart($year)
    {
        if($this->npUser != '')
        {
            $data = [
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',1)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',2)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',3)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',4)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',5)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',6)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',7)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',8)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',9)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',10)->sum('jml_retur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',11)->sum('jml_retur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',12)->sum('jml_retur'),
                    ];
        }
        else
        {
            $data = [
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',1)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',2)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',3)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',4)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',5)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',6)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',7)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',8)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',9)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',10)->sum('jml_retur'),
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',11)->sum('jml_retur'),
                        ReturPikai::whereYear('tgl_ck3',$year)->whereMonth('tgl_ck3',12)->sum('jml_retur'),
                    ];
        }
        return $data;
    }


    public function dataJenisChart($year)
    {
        $dataUni = [
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('blobor') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('hologram') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('miss_reg') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('noda') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('plooi') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('blur') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('gradasi') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('terpotong') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('tipis') ,
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('sobek'),
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('botak'),
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('tercampur'),
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('minyak'),
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('blanko'),
                    ReturPikai::whereYear('tgl_ck3',$year)->sum('diecut'),
                ];

        if($this->npUser != '')
        {
            $dataInd = [
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('blobor') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('hologram') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('miss_reg') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('noda') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('plooi') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('blur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('gradasi') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('terpotong') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('tipis') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('sobek'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('botak'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('tercampur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('minyak'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('blanko'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_ck3',$year)->sum('diecut'),
                    ];
        }
        else
        {
            $dataInd = [
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('blobor') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('hologram') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('miss_reg') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('noda') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('plooi') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('blur') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('gradasi') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('terpotong') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('tipis') ,
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('sobek'),
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('botak'),
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('tercampur'),
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('minyak'),
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('blanko'),
                        ReturPikai::whereYear('tgl_ck3',$year)->sum('diecut'),
                    ];
        }
        return [
            'dataInd' => $dataInd,
            'dataUni' => $dataUni,
        ];
    }

    public function updateChart()
    {
        $mainDataset = [
            [
                'label' => 'Barang Retur',
                'data'=> $this->dataMainChart($this->year),
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                'borderColor' => [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                'borderWidth' => '1'
            ],
        ];

        $jenisIndDataset = [
            [
                'label' => $this->jenisLabels,
                'data'=> $this->dataJenisChart($this->year)['dataInd'],
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                'borderColor' => [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                'borderWidth' => '1'
            ],
        ];


        $jenisUniDataset = [
            [
                'label' => $this->jenisLabels,
                'data'=> $this->dataJenisChart($this->year)['dataUni'],
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                'borderColor' => [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                'borderWidth' => '1'
            ],
        ];

        $this->emit('updateMainChart', [
            'labels' => $this->mainLabels,
            'datasets' => $mainDataset,
        ]);

        $this->emit('updateJenisIndChart', [
            'labels' => $this->jenisLabels,
            'datasets' => $jenisIndDataset,
        ]);

        $this->emit('updateJenisUniChart', [
            'labels' => $this->jenisLabels,
            'datasets' => $jenisUniDataset,
        ]);

    }

    private function dataTable()
    {
        $get = ReturPikai::whereYear('tgl_ck3',$this->year)
                         ->where('np_user',$this->npUser)
                         ->orderBy('tgl_ck3')
                         ->paginate(15);

        return $get;
    }

    private function jenisRetur()
    {
        return [
            "blobor",
            "blanko",
            "blur",
            "botak",
            "diecut",
            "gradasi",
            "hologram",
            "miss_reg",
            "minyak",
            "noda",
            "plooi",
            "sobek",
            "tercampur",
            "terpotong",
            "tipis",
            "terlipat"
        ];
    }
}
