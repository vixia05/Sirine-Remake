<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;
use Livewire\WithPagination;

use Carbon\Carbon;
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
        return view('livewire.performance.quality-individu',
                    [
                        'listNp'    => $this->listNp,
                        'listTeam'  => $this->listTeam,
                    ]);
    }

    public function listsNp()
    {
        $this->listNp = UserDetails::where('id_workstation',$this->team)->orderBy('nama')->get();
    }

    public function mount()
    {
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
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',1)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',2)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',3)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',4)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',5)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',6)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',7)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',8)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',9)->sum('jml_retur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',10)->sum('jml_retur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',11)->sum('jml_retur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',12)->sum('jml_retur'),
                    ];
        }
        else
        {
            $data = [
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',1)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',2)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',3)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',4)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',5)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',6)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',7)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',8)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',9)->sum('jml_retur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',10)->sum('jml_retur'),
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',11)->sum('jml_retur'),
                        ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',12)->sum('jml_retur'),
                    ];
        }
        return $data;
    }


    public function dataJenisChart($year)
    {
        $dataUni = [
                    ReturPikai::whereYear('tgl_cek',$year)->sum('blobor') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('hologram') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('miss_reg') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('noda') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('plooi') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('blur') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('gradasi') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('terpotong') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('tipis') ,
                    ReturPikai::whereYear('tgl_cek',$year)->sum('sobek'),
                    ReturPikai::whereYear('tgl_cek',$year)->sum('botak'),
                    ReturPikai::whereYear('tgl_cek',$year)->sum('tercampur'),
                    ReturPikai::whereYear('tgl_cek',$year)->sum('minyak'),
                    ReturPikai::whereYear('tgl_cek',$year)->sum('blanko'),
                    ReturPikai::whereYear('tgl_cek',$year)->sum('diecut'),
                ];

        if($this->npUser != '')
        {
            $dataInd = [
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('blobor') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('hologram') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('miss_reg') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('noda') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('plooi') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('blur') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('gradasi') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('terpotong') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('tipis') ,
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('sobek'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('botak'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('tercampur'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('minyak'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('blanko'),
                        ReturPikai::where('np_user',$this->npUser)->whereYear('tgl_cek',$year)->sum('diecut'),
                    ];
        }
        else
        {
            $dataInd = [
                        ReturPikai::whereYear('tgl_cek',$year)->sum('blobor') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('hologram') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('miss_reg') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('noda') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('plooi') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('blur') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('gradasi') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('terpotong') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('tipis') ,
                        ReturPikai::whereYear('tgl_cek',$year)->sum('sobek'),
                        ReturPikai::whereYear('tgl_cek',$year)->sum('botak'),
                        ReturPikai::whereYear('tgl_cek',$year)->sum('tercampur'),
                        ReturPikai::whereYear('tgl_cek',$year)->sum('minyak'),
                        ReturPikai::whereYear('tgl_cek',$year)->sum('blanko'),
                        ReturPikai::whereYear('tgl_cek',$year)->sum('diecut'),
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
}
