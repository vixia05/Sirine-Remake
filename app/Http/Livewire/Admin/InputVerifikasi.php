<?php

namespace App\Http\Livewire\Admin;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\QcPikai;
use App\Models\UserDetails;
use App\Models\Workstation;
use App\Models\Seksi;

class InputVerifikasi extends Component
{
    public $data,$workstation,$unit,$npUser,$verifikasi,$obc,$keterangan,$lembur,$izin;

    /**
     * Default value untuk variable
     * Yang belum ada nilainya
     */
    public function __construct()
    {

        $this->unit = UserDetails::where('np_user',Auth::user()->np)
                                 ->value('id_unit');

        $this->workstation = UserDetails::where('np_user',Auth::user()->np)
                                        ->value('id_workstation');

    }

    /**
     * Fungsi utama untuk menampilkan table
     */
    public function render()
    {
        $this->data = UserDetails::where('id_workstation',$this->workstation)
                                  ->orderBy('np_user')
                                  ->get();

        return view('livewire.admin.input-verifikasi',[
            'station' => $this->station(),
        ]);
    }

    /**
     * Fungsi untuk manampilkan dropdown by team
     * Berdasarkan unit yang sama dengan user
     */
    public function station()
    {
        return Workstation::where('id_unit',$this->unit)
                              ->orderBy('workstation')
                              ->get();
    }

    /**
     * Fungsi untuk menyimpan data user
     */
    public function store()
    {
        dd($this->npUser);
    }
}
