<?php

namespace App\Http\Livewire\Operator;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\HctsPcht;
use App\Models\HctsMmea;
use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\UserDetails;

class DataProdVerif extends Component
{
    use WithPagination;
    public $produk = 'PCHT';
    private $join;
    public $search,$npUser,$startDate,$endDate;
    protected $queryString = ['search'];

    public function render()
    {
        $this->data();

        $data = $this->join->whereLike(['petugas','no_obc',],$this->search ?? '')
                            ->when($this->startDate,function($query,$startDate){
                                return $query->whereBetween('tgl_periksa',[$startDate,$this->endDate]);
                            })
                            ->orderBy('created_at')
                            ->paginate(10);

        $listNp = UserDetails::all();
        return view('livewire.operator.data-prod-verif',[
            'data'  => $data,
            'listNp' => $listNp,
        ]);
    }

    public function data()
    {
        if($this->produk == 'PCHT')
        {
            $this->join = HctsPcht::join('order_pcht','hcts_pcht.no_po','=','order_pcht.no_po')
                            ->select(
                                'hcts_pcht.*',
                                'order_pcht.no_obc',
                                'order_pcht.rencet',
                                'order_pcht.hcs_verif',
                                'order_pcht.hcts_verif',
                                'order_pcht.mesin',
                                );
        }
        elseif($this->produk == 'MMEA')
        {
            $this->join = HctsMmea::join('order_mmea','hcts_mmea.no_po','=','order_mmea.no_po')
                            ->select(
                                'hcts_mmea.*',
                                'order_mmea.no_obc',
                                'order_mmea.rencet',
                                'order_mmea.hcs_verif',
                                'order_mmea.hcts_verif',
                                'order_mmea.mesin',
                                );
        }
    }
}
