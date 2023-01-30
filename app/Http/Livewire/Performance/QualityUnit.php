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

class QualityUnit extends Component
{
    use WithPagination;

    public $npUser;
    public $year;
    public $mainDataset,$mainLabels;
    public $jenisDataset,$jenisLabels;

    public function render()
    {

        for($i = 1; $i < 13; $i++)
        {
            $data[] = ReturPikai::whereYear('tgl_ck3',2022)
                                ->whereMonth('tgl_ck3',$i)
                                ->sum('jml_retur');
        }
        return view('livewire.performance.quality-unit');
    }

    // public function mount()
    // {
    //     $this->mainLabels = [   'Januari',
    //                             'Febuari',
    //                             'Maret',
    //                             'April',
    //                             'Mei',
    //                             'Juni',
    //                             'Juli',
    //                             'Agustus',
    //                             'September',
    //                             'Oktober',
    //                             'November',
    //                             'Desember'
    //                          ];
    //     $this->mainDataset = [
    //                             [
    //                                 'label' => 'Barang Retur',
    //                                 'data'=> $this->dataMainChart(Carbon::now()),
    //                                 'backgroundColor' => [
    //                                     'rgba(255, 99, 132, 0.2)',
    //                                     'rgba(54, 162, 235, 0.2)',
    //                                     'rgba(255, 206, 86, 0.2)',
    //                                     'rgba(75, 192, 192, 0.2)',
    //                                     'rgba(153, 102, 255, 0.2)',
    //                                     'rgba(255, 159, 64, 0.2)'
    //                                 ],
    //                                 'borderColor' => [
    //                                     'rgba(255, 99, 132, 1)',
    //                                     'rgba(54, 162, 235, 1)',
    //                                     'rgba(255, 206, 86, 1)',
    //                                     'rgba(75, 192, 192, 1)',
    //                                     'rgba(153, 102, 255, 1)',
    //                                     'rgba(255, 159, 64, 1)'
    //                                 ],
    //                                 'borderWidth' => '1'
    //                             ],
    //                         ];
    // }
}
