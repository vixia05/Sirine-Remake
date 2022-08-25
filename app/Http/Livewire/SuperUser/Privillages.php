<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use App\Models\Privillage;

class Privillages extends Component
{
    public $data, $level, $role;

    public function render()
    {
        $this->data = Privillage::all();
        return view('livewire.super-user.privillage');
    }

    public function edit($id)
    {
        $get = Privillage::findOrFail($id);
        $this->id    = $id;
        $this->level = $get->level;
        $this->role  = $get->role;
    }


}
