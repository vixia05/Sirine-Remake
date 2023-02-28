<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use App\Models\Seksi;
use App\Models\Workstation;
use App\Models\JamEfektif;
use App\Models\Unit;

class JamEfektifs extends Component
{
    public $data, $gilir, $unit, $group, $jamEfektif, $targetJam, $data_id,$seksi;
    public $satuan,$station;


    public function render()
    {
        $this->data = JamEfektif::orderBy('id_workstation')->get();
        return view('livewire.super-user.jam-efektif',[
            'listSeksi' => Seksi::all(),
        ]);
    }

    public function edit($id)
    {
        $get = JamEfektif::findOrFail($id);
        $this->data_id     = $id;
        $this->unit   = Unit::where('id',$get->unit)->value('unit');
        $this->group  = $get->group;
        $this->gilir  = $get->gilir;
        $this->target = $get->target_jam;
        $this->jamEfektif = $get->jam_efektif;
    }

    public function update()
    {
        $validateData = $this->validate([
            'target' => 'required|integer',
            'jamEfektif' => 'required|integer'
        ]);

        $target = JamEfektif::find($this->data_id);

        $target->update([
            'target_jam' => $this->target,
            'jem_efektif'=> $this->jamEfektif,
        ]);


        session()->flash('messageUpdate', 'Target Berhasil Di Update');

    }

    public function addTarget()
    {
        JamEfektif::updateOrCreate(
            [
                'gilir' => $this->gilir == null ? 1 : $this->gilir,
                'id_seksi' => $this->seksi == null ? 999 : $this->seksi,
                'id_workstation' => $this->station == null ? 999 : $this->station,
                'satuan' => $this->satuan  == null ? "-" : $this->satuan,
            ],
            [
                'jam_efektif' => $this->jamEfektif == null ? 1 : $this->jamEfektif,
                'target' => $this->targetJam  == null ? 0 : $this->targetJam,
            ]
        );

        session()->flash('messageUpdate', 'Target Berhasil Di Tambahkan');
    }
}
