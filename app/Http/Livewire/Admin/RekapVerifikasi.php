<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\QcPikai;

class RekapVerifikasi extends Component
{
    use WithPagination;
    // public $data;

    public function render()
    {
        $data = QcPikai::orderBy('tgl_verif')->paginate(15);
        return view('livewire.admin.rekap-verifikasi',['data' => $data]);
    }
}
