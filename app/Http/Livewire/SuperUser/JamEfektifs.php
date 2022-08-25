<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use App\Models\Workstation;
use App\Models\JamEfektif;
use App\Models\Unit;

class JamEfektifs extends Component
{
    public $data, $gilir, $unit, $group, $jamEfektif, $targetJam, $data_id;

    public function render()
    {
        $this->data = JamEfektif::all();
        return view('livewire.super-user.jam-efektif');
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
}
