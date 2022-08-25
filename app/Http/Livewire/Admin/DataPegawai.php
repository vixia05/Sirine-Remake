<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\UserDetails;

class DataPegawai extends Component
{
    use WithPagination;

    public function render()
    {
        $data = UserDetails::orderBy('np_user')->paginate(15);
        return view('livewire.admin.data-pegawai',['data' => $data]);
    }
}
