<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\QcPikai;
use App\Models\UserDetails;

class InputVerifikasi extends Component
{
    public $data, $team;

    public function render()
    {
        $this->data = UserDetails::all()->sortBy('np_user');
        return view('livewire.admin.input-verifikasi');
    }
}
