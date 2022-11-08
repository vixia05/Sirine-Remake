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
    public $search,$npUser;
    public $npEdit,$namaUser,$tglCk3,$jenis,$editId,$deleteId;
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
        $data = ReturPikai::findOrFail($id);
        $this->editId   = $data->id;
        $this->noda     = $data->noda;
        $this->blur     = $data->blur;
        $this->plooi    = $data->plooi;
        $this->jenis    = $data->jenis;
        $this->tipis    = $data->tipis;
        $this->sobek    = $data->sobek;
        $this->botak    = $data->botak;
        $this->diecut   = $data->diecut;
        $this->blobor   = $data->blobor;
        $this->npEdit   = $data->np_user;
        $this->tglCk3   = $data->tgl_cek;
        $this->gradasi  = $data->gradasi;
        $this->missReg  = $data->miss_reg;
        $this->hologram = $data->hologram;
        $this->namaUser = $data->nama_user;
        $this->terpotong= $data->terpotong;
        $this->tercampur= $data->tercampur;
    }

    public function update()
    {
        $validateData = $this->validate([
            'noda'      => 'numeric|nullable',
            'blur'      => 'numeric|nullable',
            'plooi'     => 'numeric|nullable',
            'tipis'     => 'numeric|nullable',
            'sobek'     => 'numeric|nullable',
            'botak'     => 'numeric|nullable',
            'diecut'    => 'numeric|nullable',
            'blobor'    => 'numeric|nullable',
            'gradasi'   => 'numeric|nullable',
            'missReg'   => 'numeric|nullable',
            'hologram'  => 'numeric|nullable',
            'terpotong' => 'numeric|nullable',
            'tercampur' => 'numeric|nullable',
        ]);

        $retur = ReturPikai::findOrFail($this->editId);
        $retur->update([
            'noda'      => $this->noda    == 0 ? 0 : $this->noda,
            'blur'      => $this->blur    == 0 ? 0 : $this->blur,
            'plooi'     => $this->plooi   == 0 ? 0 : $this->plooi,
            'jenis'     => $this->jenis   == 0 ? 0 : $this->jenis,
            'tipis'     => $this->tipis   == 0 ? 0 : $this->tipis,
            'sobek'     => $this->sobek   == 0 ? 0 : $this->sobek,
            'botak'     => $this->botak   == 0 ? 0 : $this->botak,
            'diecut'    => $this->diecut  == 0 ? 0 : $this->diecut,
            'blobor'    => $this->blobor  == 0 ? 0 : $this->blobor,
            'gradasi'   => $this->gradasi == 0 ? 0 : $this->gradasi,
            'miss_reg'  => $this->missReg == 0 ? 0 : $this->missReg,
            'hologram'  => $this->hologram== 0 ? 0 : $this->hologram,
            'terpotong' => $this->terpotong== 0 ? 0 : $this->terpotong,
            'tercampur' => $this->tercampur== 0 ? 0 : $this->tercampur,
        ]);

        session()->flash('messageUpdate', 'Data '.$this->name.' Berhasil Di Perbaharui');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $this->deleteId = $id;
    }

    public function destroy()
    {
        ReturPikai::findOrFail($this->deleteId)->delete();
        session()->flash('messageDelete', 'User Berhasil Di Hapus');
    }
}
