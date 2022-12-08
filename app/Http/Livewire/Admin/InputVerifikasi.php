<?php

namespace App\Http\Livewire\Admin;

use Auth;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;

use App\Models\QcPikai;
use App\Models\UserDetails;
use App\Models\Workstation;
use App\Models\Seksi;

class InputVerifikasi extends Component
{

    public $data, $workstation, $unit, $npUser;
    public $verifikasi, $obc, $keterangan, $lembur, $tglVerif, $izin;

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
        $this->lembur = '0';

        $this->tglVerif = Carbon::today()->format('Y-m-d');

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
     * Fungsi Reset Field
     */
    public function resetField()
    {
        $this->verifikasi = '';
        $this->obc = '';
        $this->keterangan = '';
        $this->lembur = '';
        $this->izin = '';
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

        $this->saveJmlVerif();
        $this->saveJmlObc();
        $this->saveKeterangan();
        $this->saveLembur();
        $this->saveIzin();
        $this->resetField();

        session()->flash('success', 'Data Berhasil Di Simpan');
    }


    /**
     * Private function untuk
     * Store data pada database
     */

    // 1. Save Jumlah Verifikasi
        private function saveJmlVerif()
        {
            if($this->verifikasi == !null)
            {
                foreach($this->verifikasi as $key => $verif)
                {
                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_station'=> $this->workstation
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'jml_verif' => $verif,
                        ]
                    );
                }
            }
            else{

            }
        }

    // 2. Save Jumlah OBC
        private function saveJmlObc()
        {
            if($this->obc == !null)
            {
                foreach($this->obc as $key => $obc)
                {
                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_station'=> $this->workstation
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'jml_obc'   => $obc,
                        ]
                    );
                }
            }
            else
            {

            }
        }

    // 3. Save Keterangan
        private function saveKeterangan()
        {
            if($this->keterangan == !null)
            {
                foreach($this->keterangan as $key => $keterangan)
                {
                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_station'=> $this->workstation
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'keterangan'   => $keterangan,
                        ]
                    );
                }
            }
            else
            {

            }
        }

    // 4. Save Lembur
        private function saveLembur()
        {
            if($this->lembur == !null)
            {
                foreach($this->lembur as $key => $lembur)
                {
                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_station'=> $this->workstation
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'lembur'   => $lembur,
                        ]
                    );
                }
            }
            else
            {

            }
        }

    // 6. Save Perizinan
        private function saveIzin()
        {
            if($this->izin == !null)
            {
                foreach($this->izin as $key => $izin)
                {
                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_station'=> $this->workstation
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'izin'      => $izin,
                        ]
                    );
                }
            }
            else
            {

            }
        }

}
