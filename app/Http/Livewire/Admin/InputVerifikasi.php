<?php

namespace App\Http\Livewire\Admin;

use Auth;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;

use App\Models\QcPikai;
use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\UserDetails;
use App\Models\Workstation;
use App\Models\JamEfektif;
use App\Models\Seksi;

class InputVerifikasi extends Component
{

    public $workstation, $unit, $npUser,$jenis, $search;
    public $verifikasi, $obc, $keterangan, $lembur, $tglVerif, $izin;
    protected $queryString = ['search'];

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

        $this->jenis = "PCHT";

    }

    /**
     * Fungsi utama untuk menampilkan table
     */
    public function render()
    {
        $data = UserDetails::whereLike(['np_user','nama'],$this->search ?? '')
                            ->when($this->workstation,function($query,$workstation){
                                return $query->where('id_workstation',$this->workstation);
                            })
                            ->orderBy('np_user')
                            ->get();

        return view('livewire.admin.input-verifikasi',[
            'station' => $this->station(),
            'data'  => $data,
        ]);
    }

    /**
     * Get Target By WIP Untuk Menentukan target minimal
     */
    public function getTarget($station)
    {
        $efektifPcht = JamEfektif::where('id_workstation',$station)
                                ->where('gilir',1)
                                ->where('produk',"PCHT")
                                ->where('satuan',"Lbr");

        $normalPcht = $efektifPcht->sum('target') * $efektifPcht->sum('jam_efektif');

        $efektifMmea = JamEfektif::where('id_workstation',$station)
                                ->where('gilir',1)
                                ->where('produk',"MMEA")
                                ->where('satuan',"Lbr");

        $normalMmea = $efektifMmea->sum('target') * $efektifMmea->sum('jam_efektif');

        if($this->jenis == "PCHT")
        {
            $get = OrderPcht::whereBetween('tgl_obc',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)->subday()
                                                    ]);

            $getCetak = $get->whereBetween('tgl_cetak',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)
                                                       ])->sum('rencet');

            $getVerif = $get->whereBetween('tgl_verif',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)->subday()
                                                       ])->sum('rencet');

            $getWip = $getCetak - $getVerif;

            $target = $getWip < 805600 ? round(($getWip / 805600) * $normalPcht) : $normalPcht;

        }
        elseif($this->jenis == "MMEA")
        {
            $get = OrderMmea::whereBetween('tgl_obc',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)->subday()
                                                    ]);

            $getCetak = $get->whereBetween('tgl_cetak',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)
                                                       ])->sum('rencet');

            $getVerif = $get->whereBetween('tgl_verif',[
                                                        Carbon::parse($this->tglVerif)->subdays(60),
                                                        Carbon::parse($this->tglVerif)->subday()
                                                       ])->sum('rencet');

            $getWip = $getCetak - $getVerif;

            $target = $getWip < 24000 ? round(($getWip / 24000) * $normalMmea) : $normalMmea;
        }
        else
        {
            $getWIp = 0;
            $target = 0;
        }
        // dd($target);
        return $target;

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
        $this->saveIzin();
        $this->saveLembur();
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
                            'id_workstation'=> $this->workstation,
                            'jenis'     => $this->jenis,
                        ],
                        [
                            'target'    => $this->getTarget($this->workstation),
                            'lembur'   => 0,
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'jml_verif' => $verif == !null ? $verif : 0,
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
                            'id_workstation'=> $this->workstation,
                            'jenis'     => $this->jenis,
                        ],
                        [
                                                        'target'    => $this->getTarget($this->workstation),
                            'lembur'   => 0,
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'jml_obc'   => $obc == !null ? $obc : 0,
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
                            'id_workstation'=> $this->workstation,
                            'jenis'     => $this->jenis,
                        ],
                        [
                            'target'    => $this->getTarget($this->workstation),
                            'lembur'   => 0,
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'keterangan'   => $keterangan == !null ? $keterangan : null,
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
                    if($lembur == 1)
                    {
                        $target = $this->jenis == "PCHT" ? 20000 : 8000;
                    }
                    elseif($lembur == 2)
                    {
                        $target = $this->jenis == "PCHT" ? 22500 : 9000;
                    }
                    elseif($lembur == 3)
                    {
                        $target = $this->jenis == "PCHT" ? 27500 : 11000;
                    }
                    else
                    {
                        $target = $this->getTarget($this->workstation);
                    }

                    QcPikai::updateOrCreate(
                        [
                            'tgl_verif' => $this->tglVerif,
                            'np_user'   => $key,
                            'id_workstation'=> $this->workstation,
                            'jenis'     => $this->jenis,
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'target'    => $target,
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
                            'id_workstation'=> $this->workstation,
                            'jenis'     => $this->jenis,
                        ],
                        [
                            'nama_user' => UserDetails::where('np_user',$key)->value('nama'),
                            'izin'      => $izin == "-" ? 0 : $izin,
                        ]
                    );
                }
            }
            else
            {

            }
        }

}
