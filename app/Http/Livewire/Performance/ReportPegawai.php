<?php

namespace App\Http\Livewire\Performance;

use Livewire\Component;

use App\Models\UserDetails;
use App\Models\Workstation;

class ReportPegawai extends Component
{
    public $listNp;
    public $startDate,$endDate;
    public $namaUser,$npUser,$stationUser,$qtyUser,$quaUser,$overallPerformance;

    public function mount()
    {
        $this->listNp = UserDetails::all()->sortBy('np_user');
    }

    public function render()
    {
        return view('livewire.performance.report-pegawai',[
            'listNp' => $this->listNp,
        ]);
    }

    public function retriveData()
    {
        $get = UserDetails::where('np_user',$this->npUser);

        $this->namaUser = $get->value('nama');

        $this->stationUser = Workstation::Where('id',$get->value('id_workstation'))
                                        ->value('workstation');
    }

    public function getQty()
    {

    }
}
