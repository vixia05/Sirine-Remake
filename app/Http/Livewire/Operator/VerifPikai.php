<?php

namespace App\Http\Livewire\Operator;

use Carbon\Carbon;
use Livewire\Component;

use App\Models\UserDetails;
use App\Models\OrderPcht;
use App\Models\OrderMmea;

class VerifPikai extends Component
{
    public $listNp;
    public $tanggal,$noPo,$npUser;
    public $obc,$terima,$koPab,$seri,$hje,$bpb,$warna,$jht,$jenis;
    public $blobor,$holo,$miss,$noda,$plooi,$blur,$gradasi,$terpotong,$tipis,$sobek,$botak,$tercampur,$minyak,$blanko,$diecut;

    public function render()
    {
        $this->listNp   = UserDetails::where('id_unit','4')->orderBy('np_user')->get();
        $this->tanggal  = today();
        return view('livewire.operator.verif-pikai',[
            'listNp' => $this->listNp,
        ]);
    }

    public function getSpec()
    {
        $data = OrderPcht::where('no_po',$this->noPo);
        $this->obc = $data->pluck('no_obc');
    }
}
