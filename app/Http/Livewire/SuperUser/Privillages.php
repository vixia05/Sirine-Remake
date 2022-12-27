<?php

namespace App\Http\Livewire\SuperUser;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Privillage;
use App\Models\UserDetals;
use App\Models\Level;

class Privillages extends Component
{
    use WithPagination;
    public $level, $role;

    public function render()
    {
        $data = Level::paginate(10);
        return view('livewire.super-user.privillage',[
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $get = Privillage::findOrFail($id);
        $this->id    = $id;
        $this->level = $get->level;
        $this->role  = $get->role;
    }


}
