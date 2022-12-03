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
    public $produk;
    private $join;
    public $search,$npUser,$startDate,$endDate;
    protected $queryString = ['search'];

    public function mount()
    {
        $this->produk = "PCHT";
        $this->startDate = today();
        $this->endDate  = today();
    }

    public function render()
    {
        $this->data();

        $data = $this->join;
        // dd($this->join);
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
                                )
                            ->whereLike(['petugas1','petugas2','no_obc',],$this->search ?? '')
                            ->when($this->startDate,function($query,$startDate){
                                return $query->whereBetween('tgl_periksa',[$startDate,$this->endDate]);
                            })
                            ->orderBy('created_at')
                            ->paginate(25);
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
                                )
                                ->whereLike(['petugas1','petugas2','no_obc',],$this->search ?? '')
                                ->when($this->startDate,function($query,$startDate){
                                    return $query->whereBetween('tgl_periksa',[$startDate,$this->endDate]);
                                })
                                ->orderBy('created_at')
                                ->paginate(25);
        }
    }
}
