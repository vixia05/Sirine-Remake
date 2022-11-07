<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use DB;
use Auth;
use App\Models\ReturPikai;
use App\Models\UserDetails;

class RekapRetur extends Component
{
    use WithPagination;
    public $search;
    public $npUser,$namaUser,$tglCk3,$jenis;
    public $blobor,$hologram,$missReg,$noda,$plooi,$blur,$gradasi,$terpotong,$tipis,$sobek,$botak,$tercampur,$diecut;
    protected $queryString = ['search'];

    public function render()
    {
        $data = ReturPikai::whereLike(['np_user','nama_user'],$this->search ?? '')
                        ->when($this->npUser, function($query, $npUser){
                            return $query->where('np_user',$npUser);
                        })
                        ->orderBy('tgl_cek')
                        ->paginate(10);

        return view('livewire.admin.rekap-retur',[
            'data'  => $data,
            'listNp'=> UserDetails::all()->sortBy('nama'),
        ]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $data = ReturPikai::findOrFail('id',$id);
        $this->tglCk3   = $data->tgl_cek;
        $this->npUser   = $data->np_user;
        $this->namaUser = $data->nama_user;
        $this->jenis    = $data->jenis;
        $this->blobor   = $data->blobor;
        $this->hologram = $data->hologram;
        $this->missReg  = $data->noda;
        $this->plooi    = $data->plooi;
        $this->blur     = $data->blur;
        $this->gradasi  = $data->gradasi;
        $this->terpotong= $data->terpotong;
        $this->tipis    = $data->tipis;
        $this->sobek    = $data->sobek;
        $this->botak    = $data->botak;
        $this->tercampur= $data->tercampur;
        $this->diecut   = $data->diecut;


    }

    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('messageDelete', 'User Berhasil Di Hapus');
    }
}
