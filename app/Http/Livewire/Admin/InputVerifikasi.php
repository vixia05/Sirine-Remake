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
    public $verifikasi, $obc, $keterangan, $lemburAw, $lemburAk, $tglVerif, $izin;

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
        $this->lemburAw = '0';
        $this->lemburAk = '0';

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
        dd($this->saveLembur());
        $this->saveJmlVerif();
        $this->saveJmlObc();
        $this->saveKeterangan();
        $this->saveLembur();
        $this->saveIzin();

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
           $result = [];
            if($this->lemburAw == !null && $this->lemburAk == !null)
            {
                $array = array_merge(['lemburAk' => $this->lemburAk, 'lemburAw' => $this->lemburAw]);
            }
            elseif($this->lemburAw == !null)
            {
                $array = $this->lemburAw;
            }
            elseif($this->lemburAk == !null)
            {
                $array = $this->lemburAk;
            }

            foreach ($array as $value)
            {
                $lembur = $value;
            }

            foreach ($lembur as $key => $sum)
            {
                $result[$key] = array_sum(array_column($array,$key));
            }
            dd($result);
            return $result;
        }

    // 2. Save Perizinan
        private function saveIzin()
        {

        }

}
