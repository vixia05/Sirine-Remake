<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;
use App\Models\Unit;
use App\Models\Seksi;
use App\Models\Workstation;
use App\Models\UserDetails;

class DataPegawai extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];

    public $updateMode = false;

    public $seksi, $unit, $station;
    public $row, $data_id, $nama, $np ,$email, $alamat, $tglLahir;

    public function render()
    {
        $data = UserDetails::where('np_user','like','%'.$this->search.'%')
                            ->orWhere('nama','like','%'.$this->search.'%')
                            ->orWhere('contact','like','%'.$this->search.'%')
                            ->orWhere('tgl_lahir','like','%'.$this->search.'%')
                            ->orWhere('alamat','like','%'.$this->search.'%')
                            ->orderBy('np_user')
                            ->paginate(10);

        $listUnit    = Unit::all()->sortBy('unit');
        $listSeksi   = Seksi::all()->sortBy('seksi');
        $listStation = Workstation::all()->sortBy('workstation');

        return view('livewire.admin.data-pegawai',[
            'data' => $data,
            'listUnit' => $listUnit,
            'listSeksi' => $listSeksi,
            'listStation' => $listStation,
        ]);
    }


    public function updatingsearch()
    {
        $this->resetPage();
    }

    private function resetInputFields(){
        $this->data_id = '';
    }

    public function edit($id)
    {
        $user = UserDetails::findOrFail($id);
        $this->data_id  = $id;
        $this->np       = $user->np_user;
        $this->nama     = $user->nama;
        $this->unit     = $user->id_unit;
        $this->seksi    = $user->id_seksi;
        $this->station  = $user->id_workstation;
        $this->email    = User::where('np',$this->np)->value('email');
        $this->alamat   = $user->alamat;
        $this->contact  = $user->contact;
        $this->tglLahir = $user->tgl_lahir;

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validateData = $this->validate([
            'nama' => 'required|string'
        ]);

        $user = UserDetails::find($this->data_id);
        $user->update([
            'nama'     => $this->nama,
            'id_unit'  => $this->unit,
            'id_seksi' => $this->seksi,
            'id_workstation' => $this->station,
            'alamat'    => $this->alamat,
            'contact'   => $this->contact,
            'tgl_lahir' => $this->tglLahir,
        ]);

        $this->updateMode = false;

        session()->flash('messageUpdate', 'Data '.$this->nama.' Berhasil Di Perbaharui');
        $this->resetInputFields();
    }
}
