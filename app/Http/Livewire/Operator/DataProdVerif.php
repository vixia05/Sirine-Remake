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
    public $noPo;
    public $search,$npUser,$startDate,$endDate;
    public $tglVerif,$blobor,$holo,$miss,$noda,$plooi,$blur,$gradasi,$terpotong,$tipis,$sobek,$botak,$tercampur,$minyak,$blanko,$diecut,$keterangan,$wip;
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
            'confPo' => $this->noPo,
        ]);
    }

    public function data()
    {
        if($this->produk == 'PCHT')
        {
            $this->join = HctsPcht::join('order_pcht','po_hcts','=','order_pcht.no_po')
                            ->select(
                                'hcts_pcht.*',
                                'order_pcht.no_obc',
                                'order_pcht.rencet',
                                'order_pcht.hcs_verif',
                                'order_pcht.hcts_verif',
                                'order_pcht.mesin',
                                )
                            ->whereLike(['petugas1','petugas2','no_obc','po_hcts'],$this->search ?? '')
                            ->when($this->startDate,function($query,$startDate){
                                return $query->whereBetween('tgl_periksa',[$startDate,$this->endDate]);
                            })
                            ->orderBy('created_at')
                            ->paginate(25);
        }
        elseif($this->produk == 'MMEA')
        {
            $this->join = HctsMmea::join('order_mmea','po_hcts','=','order_mmea.no_po')
                            ->select(
                                'hcts_mmea.*',
                                'order_mmea.no_obc',
                                'order_mmea.rencet',
                                'order_mmea.hcs_verif',
                                'order_mmea.hcts_verif',
                                'order_mmea.mesin',
                                )
                                ->whereLike(['petugas1','petugas2','no_obc','po_hcts'],$this->search ?? '')
                                ->when($this->startDate,function($query,$startDate){
                                    return $query->whereBetween('tgl_periksa',[$startDate,$this->endDate]);
                                })
                                ->orderBy('created_at')
                                ->paginate(25);
        }
    }

    /**
     * Function for retrive data
     * for edit modal
     */
    public function edit($po)
    {
        if(HctsPcht::where('po_hcts',$po)->exists())
        {
            $get = HctsPcht::where('po_hcts',$po);
            $this->obc = OrderPcht::where('no_po',$po)->value('no_obc');
        }

        elseif(HctsMmea::where('po_hcts',$po)->exists())
        {
            $get = HctsMmea::where('po_hcts',$po);
            $this->obc = OrderMmea::where('no_po',$po)->value('no_obc');
        }

        $this->tglVerif  = $get->value('tgl_periksa');
        $this->blanko    = $get->value('blanko');
        $this->blobor    = $get->value('blobor');
        $this->blur      = $get->value('blur');
        $this->diecut    = $get->value('diecut');
        $this->holo      = $get->value('hologram');
        $this->miss      = $get->value('miss_reg');
        $this->noPo      = $get->value('po_hcts');
        $this->noda      = $get->value('noda');
        $this->plooi     = $get->value('plooi');
        $this->gradasi   = $get->value('gradasi');
        $this->terpotong = $get->value('terpotong');
        $this->tipis     = $get->value('tipis');
        $this->sobek     = $get->value('sobek');
        $this->botak     = $get->value('botak');
        $this->tercampur = $get->value('tercampur');
        $this->minyak    = $get->value('minyak');
        $this->wip       = '';
        $this->keterangan = $get->value('keterangan');
    }

    /**
     * Function for update and passing
     * value to server
     *
     */
    public function update()
    {
        // dd($this->noPo);
        if($this->produk == "PCHT")
        {
            HctsPcht::where('po_hcts',$this->noPo)
                    ->update([
                                'blobor'  => $this->blobor  == null ? 0 : $this->blobor,
                                'hologram'=> $this->holo    == null ? 0 : $this->holo,
                                'miss_reg'=> $this->miss    == null ? 0 : $this->miss,
                                'noda'    => $this->noda    == null ? 0 : $this->noda,
                                'plooi'   => $this->plooi   == null ? 0 : $this->plooi,
                                'blur'    => $this->blur    == null ? 0 : $this->blur,
                                'gradasi' => $this->gradasi == null ? 0 : $this->gradasi,
                                'tipis'   => $this->tipis   == null ? 0 : $this->tipis,
                                'sobek'   => $this->sobek   == null ? 0 : $this->sobek,
                                'botak'   => $this->botak   == null ? 0 : $this->botak,
                                'minyak'  => $this->minyak  == null ? 0 : $this->minyak,
                                'blanko'  => $this->blanko  == null ? 0 : $this->blanko,
                                'diecut'  => $this->diecut  == null ? 0 : $this->diecut,
                                // 'petugas1' => $this->petugas1  == null ? Auth::user()->np : $this->petugas1,
                                // 'petugas2' => $this->petugas2  == null ? "-" : $this->petugas2,
                                'tgl_periksa' => $this->tglVerif == null ? 0 : $this->tglVerif,
                                'terpotong'  => $this->terpotong == null ? 0 : $this->terpotong,
                                'tercampur'  => $this->tercampur == null ? 0 : $this->tercampur,
                                'keterangan' => $this->keterangan == null ? "-" : $this->keterangan,
                    ]);
        }
        else
        {
            HctsMmea::where('po_hcts',$this->noPo)
                    ->update([
                        'blobor'  => $this->blobor  == null ? 0 : $this->blobor,
                        'hologram'=> $this->holo    == null ? 0 : $this->holo,
                        'miss_reg'=> $this->miss    == null ? 0 : $this->miss,
                        'noda'    => $this->noda    == null ? 0 : $this->noda,
                        'plooi'   => $this->plooi   == null ? 0 : $this->plooi,
                        'blur'    => $this->blur    == null ? 0 : $this->blur,
                        'gradasi' => $this->gradasi == null ? 0 : $this->gradasi,
                        'tipis'   => $this->tipis   == null ? 0 : $this->tipis,
                        'sobek'   => $this->sobek   == null ? 0 : $this->sobek,
                        'botak'   => $this->botak   == null ? 0 : $this->botak,
                        'minyak'  => $this->minyak  == null ? 0 : $this->minyak,
                        'blanko'  => $this->blanko  == null ? 0 : $this->blanko,
                        'diecut'  => $this->diecut  == null ? 0 : $this->diecut,
                        // 'petugas1' => $this->petugas1  == null ? Auth::user()->np : $this->petugas1,
                        // 'petugas2' => $this->petugas2  == null ? "-" : $this->petugas2,
                        'tgl_periksa' => $this->tglVerif == null ? 0 : $this->tglVerif,
                        'terpotong'  => $this->terpotong == null ? 0 : $this->terpotong,
                        'tercampur'  => $this->tercampur == null ? 0 : $this->tercampur,
                        'keterangan' => $this->keterangan == null ? "-" : $this->keterangan,
            ]);
        }

        session()->flash('saved',$this->noPo);
    }

    /**
     *
     */
    public function delete($po)
    {
        if(HctsPcht::where('po_hcts',$po)->exists())
        {
            $this->noPo = HctsPcht::where('po_hcts',$po)->value('po_hcts');
        }

        elseif(HctsMmea::where('po_hcts',$po)->exists())
        {
            $this->noPo = HctsMmea::where('po_hcts',$po)->value('po_hcts');
        }
    }

    public function destroy()
    {
        if($this->produk === "PCHT")
        {
            HctsPcht::where('po_hcts',$this->noPo)->delete();
            session()->flash('deleted',$this->noPo);
        }
        elseif($this->produk === "MMEA")
        {
            HctsMmea::where('po_hcts',$this->noPo)->delete();
            session()->flash('deleted',$this->noPo);
        }
    }
}
