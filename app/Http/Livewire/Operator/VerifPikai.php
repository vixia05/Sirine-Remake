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
    public $tanggal,$noPo,$npUser;
    public $obc,$terima,$koPab,$seri,$hje,$bpb,$warna,$jht,$jenis;
    public $blobor,$holo,$miss,$noda,$plooi,$blur,$gradasi,$terpotong,$tipis,$sobek,$botak,$tercampur,$minyak,$blanko,$diecut,$keterangan;

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
            $this->jenis = null;
            $data = null;
        }
        $this->obc    = $data->pluck('no_obc');
        $this->terima = $data->pluck('rencet');
    }

    public function resetInputField()
    {
        $this->noPo = '';
        $this->blobor = '';
        $this->holo   = '';
        $this->miss   = '';
        $this->noda   = '';
        $this->plooi  = '';
        $this->blur   = '';
        $this->gradasi = '';
        $this->terpotong = '';
        $this->tipis = '';
        $this->sobek = '';
        $this->botak = '';
        $this->tercampur = '';
        $this->minyak = '';
        $this->blanko = '';
        $this->diecut = '';
        $this->keterangan = '';
    }

    public function save()
    {
        // $validate = $this->validate([

        // ]);

        if($this->jenis === "PCHT")
        {
            HctsPcht::updateOrCreate(
                [
                    'no_po' => $this->noPo == null ? 0 : $this->noPo,
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
                    'petugas' => $this->npUser  == null ? Auth::user()->np : $this->npUser,
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
                    'no_po' => $this->noPo == null ? 0 : $this->noPo,
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
                    'petugas' => $this->npUser  == null ? Auth::user()->np : $this->npUser,
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
