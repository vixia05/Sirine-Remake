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
        // dd($this->saveLembur());
        $this->saveJmlVerif();
        $this->saveJmlObc();
        $this->saveKeterangan();
        $this->saveLembur();
        // $this->saveStation();
        $this->saveIzin();
        $this->resetField();

        session()->flash('saveModal', 'Data Berhasil Di Simpan');
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
                    $this->npUser = array_keys($this->verifikasi);
                    for($i=0;$i<count($this->npUser);$i++)
                        {
                            QcPikai::updateOrCreate(
                                    [
                                        'np_user'   => $this->npUser[$i],
                                        'tgl_verif' => $this->tglVerif,
                                        'id_station'=> $this->workstation,
                                    ],
                                    [
                                        'jml_verif' => collect($this->verifikasi)->values()[$i],
                                    ]);
                        }

                }
            else
                {
                    //
                }
        }

    // 2. Save Jumlah OBC
        private function saveJmlObc()
        {
            if($this->obc == !null)
                {
                    $this->npUser = array_keys($this->obc);
                    for($i=0;$i<count($this->obc);$i++)
                        {
                            QcPikai::updateOrCreate(
                                    [
                                        'np_user'   => $this->npUser[$i],
                                        'tgl_verif' => $this->tglVerif,
                                        'id_station'=> $this->workstation,
                                    ],
                                    [
                                        'jml_obc' => collect($this->obc)->values()[$i],
                                    ]);
                        }

                }
            else
                {
                    //
                }
        }

    // 3. Save Keterangan
        private function saveKeterangan()
        {
            if($this->keterangan == !null)
                {
                    $this->npUser = array_keys($this->keterangan);
                    for($i=0;$i<count($this->keterangan);$i++)
                        {
                            QcPikai::updateOrCreate(
                                    [
                                        'np_user'   => $this->npUser[$i],
                                        'tgl_verif' => $this->tglVerif,
                                        'id_station'=> $this->workstation,
                                    ],
                                    [
                                        'keterangan' => collect($this->keterangan)->values()[$i],
                                    ]);
                        }

                }
            else
                {
                    //
                }
        }

    // 4. Save Lembur
        private function saveLembur()
        {
           // Check Jika Lembur awal & akhir ada recordnya
           $array = [];
           $lembur = [];
           if($this->lembur == !null)
            {
                 $this->npUser = array_keys($this->lembur);
                 for($i = 0; $i < count($this->lembur); $i++)
                     {
                         QcPikai::updateOrCreate(
                            [
                                'np_user'   => $this->npUser[$i],
                                'tgl_verif' => $this->tglVerif,
                                'id_station'=> $this->workstation,
                            ],
                            [
                                'lembur'    => collect($this->lembur)->values()[$i],
                            ]);
                     }
            }
           else
           {
            //
           }
        }

    // 5. Save Station
        private function saveStation()
        {
            if($this->station == !null)
             {
                $this->npUser = array_keys($this->station);
                for($i = 0; $i < count($this->station); $i++)
                    {
                        QcPikai::updateOrCreate(
                        [
                            'np_user'   => $this->npUser[$i],
                            'tgl_verif' => $this->tglVerif,
                            'id_station'=> $this->workstation,
                        ],
                        [
                            'id_station'=> collect($this->station)->values()[$i]
                        ]);
                    }
             }
        }

    // 6. Save Perizinan
        private function saveIzin()
        {

        }

}
