<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Unit;
use App\Models\Seksi;
use App\Models\Workstation;
use App\Models\JamEfektif;

class JamEfektifs extends Component
{
    use WithPagination;
    private $data;
    public $gilir,$unit,$group,$jamEfektif,$targetJam,$data_id,$seksi;
    public $satuan,$produk,$station;


    public function render()
    {
        $this->data = JamEfektif::orderBy('id_workstation')->paginate(10);
        return view('livewire.super-user.jam-efektif',[
            'listSeksi' => Seksi::all(),
            'data'  => $this->data,
        ]);
    }

    public function edit($id)
    {
        $get = JamEfektif::findOrFail($id);
        $this->data_id     = $id;
        $this->seksi       = $get->seksi->id;
        $this->gilir       = $get->gilir;
        $this->targetJam   = $get->target;
        $this->satuan      = $get->satuan;
        $this->produk      = $get->produk;
        $this->jamEfektif  = $get->jam_efektif;
        $this->station     = $get->workstation->id;
    }

    public function update()
    {
        $validateData = $this->validate([
            'targetJam'  => 'required|integer',
            'jamEfektif' => 'required|integer'
        ]);

        $target = JamEfektif::findOrFail($this->data_id);

        $target->update([
            'target' => $this->targetJam,
            'satuan' => $this->satuan,
            'jam_efektif'=> $this->jamEfektif,
        ]);

        $message = Workstation::where('id',$this->station)->value('workstation');
        $this->resetInputField();

        session()->flash('saved', $message);

    }

    public function addTarget()
    {
        JamEfektif::updateOrCreate(
            [
                'gilir' => $this->gilir == null ? 1 : $this->gilir,
                'id_seksi' => $this->seksi == null ? 999 : $this->seksi,
                'id_workstation' => $this->station == null ? 999 : $this->station,
                'satuan' => $this->satuan  == null ? "-" : $this->satuan,
                'produk' => $this->produk  == null ? "-" : $this->produk,
            ],
            [
                'jam_efektif' => $this->jamEfektif == null ? 1 : $this->jamEfektif,
                'target' => $this->targetJam  == null ? 0 : $this->targetJam,
            ]
        );

        $this->resetInputField();
        session()->flash('messageUpdate', 'Target Berhasil Di Tambahkan');
    }

    public function delete($id)
    {
        $this->data_id = $id;
    }

    public function destroy()
    {
        JamEfektif::where('id',$this->data_id)->delete();

        session()->flash('deleted');
    }

    public function resetInputField()
    {
        $this->data_id     = "";
        $this->seksi       = "";
        $this->gilir       = "";
        $this->targetJam   = "";
        $this->satuan      = "";
        $this->produk      = "";
        $this->jamEfektif  = "";
        $this->station = "";
    }
}
