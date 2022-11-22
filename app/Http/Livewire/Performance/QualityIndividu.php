<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;
use Livewire\WithPagination;

use Carbon\Carbon;
use App\Models\Workstation;
use App\Models\UserDetails;

class QualityIndividu extends Component
{
    use WithPagination;

    public $npUser;
    public $listTeam,$team,$listNp;
    public $startDate,$endDate;

    public function mount()
    {
        $this->listTeam= Workstation::orderBy('workstation')->get();
        $this->listNp  = [];
    }

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
}
