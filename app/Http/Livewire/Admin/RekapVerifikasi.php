<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use App\Models\QcPikai;
use App\Models\UserDetails;

class RekapVerifikasi extends Component
{
    use WithPagination;
    // public $seksi;
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.admin.rekap-verifikasi',[
            'data' => QcPikai::where('np_user', 'like', '%'.$this->search.'%')->orderBy('tgl_verif')->paginate(10),
        ]);
    }
}
