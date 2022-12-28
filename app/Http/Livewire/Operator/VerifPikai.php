<?php

namespace App\Http\Livewire\Operator;

use Auth;
use Carbon\Carbon;
use Livewire\Component;

use App\Models\UserDetails;
use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\HctsPcht;
use App\Models\HctsMmea;

class VerifPikai extends Component
{
    public $listNp;
    public $tanggal,$noPo,$petugas1,$petugas2;
    public $obc,$terima,$koPab,$seri,$hje,$bpb,$warna,$jht,$jenis;
    public $blobor,$holo,$miss,$noda,$plooi,$blur,$gradasi,$terpotong,$tipis,$sobek,$botak,$tercampur,$minyak,$blanko,$diecut,$keterangan,$wip;

    public function mount()
    {
        $this->tanggal   = Carbon::today()->format('Y-m-d');
        $this->petugas1  = Auth::user()->np;
        $this->jenis     = "PCHT";
    }

    public function render()
    {
        $this->listNp   = UserDetails::where('id_unit','4')->orderBy('np_user')->get();
        return view('livewire.operator.verif-pikai',[
            'listNp' => $this->listNp,
        ]);
    }

    public function getSpec()
    {
        if(OrderPcht::where('no_po',$this->noPo)->exists())
        {
            $data  = OrderPcht::where('no_po',$this->noPo);
            $this->jenis = "PCHT";
        }

        elseif(OrderMmea::where('no_po',$this->noPo)->exists())
        {
            $data  = OrderMmea::where('no_po',$this->noPo);
            $this->jenis = "MMEA";
        }

        else
        {
            $data = null;
        }
        $this->obc    = $data == null ? "" : $data->value('no_obc');
        $this->terima = $data == null ? "" : $data->value('rencet');
    }

    public function resetInputField()
    {
        session()->flash('success',$this->noPo);

        $this->blanko = '';
        $this->blobor = '';
        $this->blur   = '';
        $this->diecut = '';
        $this->holo   = '';
        $this->miss   = '';
        $this->noPo = '';
        $this->noda   = '';
        $this->plooi  = '';
        $this->gradasi = '';
        $this->terpotong = '';
        $this->tipis = '';
        $this->sobek = '';
        $this->botak = '';
        $this->tercampur = '';
        $this->minyak = '';
        $this->wip = '';
        $this->keterangan = '';
        $this->obc = '';
        $this->terima = '';

    }

    public function save()
    {
        // $validate = $this->validate([

        // ]);

        if($this->jenis === "PCHT")
        {
            HctsPcht::updateOrCreate(
                [
                    'po_hcts' => $this->noPo == null ? 0 : $this->noPo,
                ],
                [
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
                    'petugas1' => $this->petugas1  == null ? Auth::user()->np : $this->petugas1,
                    'petugas2' => $this->petugas2  == null ? "-" : $this->petugas2,
                    'tgl_periksa' => $this->tanggal == null ? 0 : $this->tanggal,
                    'terpotong'  => $this->terpotong == null ? 0 : $this->terpotong,
                    'tercampur'  => $this->tercampur == null ? 0 : $this->tercampur,
                    'keterangan' => $this->keterangan == null ? "-" : $this->keterangan,
                ]
            );
            $this->resetInputField();
        }
        elseif($this->jenis === "MMEA")
        {
            HctsMmea::updateOrCreate(
                [
                    'po_hcts' => $this->noPo == null ? 0 : $this->noPo,
                ],
                [
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
                    'petugas1' => $this->petugas1  == null ? Auth::user()->np : $this->petugas1,
                    'petugas2' => $this->petugas2  == null ? "-" : $this->petugas2,
                    'tgl_periksa' => $this->tanggal == null ? 0 : $this->tanggal,
                    'terpotong'  => $this->terpotong == null ? 0 : $this->terpotong,
                    'tercampur'  => $this->tercampur == null ? 0 : $this->tercampur,
                    'keterangan' => $this->keterangan == null ? "-" : $this->keterangan,
                ]
            );
            $this->resetInputField();
        }
        else
        {

        }
    }
}
