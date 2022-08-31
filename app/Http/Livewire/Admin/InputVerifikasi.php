<?php

namespace App\Http\Livewire\Admin;

use Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;

use App\Models\QcPikai;
use App\Models\UserDetails;
use App\Models\Workstation;
use App\Models\Seksi;

class InputVerifikasi extends Component
{
    public $data,$workstation,$unit,$verifikasi,$obc,$keterangan,$lembur,$izin,$tglVerif,$npUser;

    // public Collection $npUser;

    /**
     * Default value untuk variable
     * Yang belum ada nilainya
     */
    public function mount()
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
        $this->npUser = array_keys($this->verifikasi);

            for($i=0;$i<count($this->npUser);$i++)
            {

                QcPikai::updateOrCreate(
                        [
                            'np_user'   => $this->npUser[$i],
                            'tgl_verif' => $this->tglVerif,
                        ],
                        [
                            'jml_verif' => collect($this->verifikasi)->values()[$i],
                            'jml_obc'   => collect($this->obc)->values()[$i],
                        ]
                        );

            }
    }
}
