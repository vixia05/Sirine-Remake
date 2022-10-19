<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use Carbon\Carbon;
use App\Models\QcPikai;
use App\Models\Workstation;
use App\Models\UserDetails;


class QuantityIndividu extends Component
{
    use WithPagination;

    public $npUser;
    public $listTeam,$team,$listNp;

    public function mount()
    {
        $this->listTeam= Workstation::orderBy('workstation')->get();
        $this->listNp  = [""];
        $this->npUser  = Auth::user()->np;
        $this->endDate = Carbon::now();
        $this->startDate = Carbon::now()->startOfMonth();
    }

    public function render()
    {
        $data = QcPikai::where('np_user',$this->npUser)->paginate(10);

        return view('livewire.performance.quantity-individu',
                    [
                        'data' => $data,
                    ]);
    }

    public function listsNp()
    {
        $this->listNp = UserDetails::where('id_workstation',$this->team)->orderBy('nama')->pluck('np_user');
    }
}
