<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use DB;
use Auth;
use App\Models\ReturPikai;
use App\Models\UserDetails;

class RekapRetur extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $data = ReturPikai::where('np_user', 'like', '%'.$this->search.'%')
                        ->orWhere('nama_user', 'like', '%'.$this->search.'%')
                        ->orderBy('tgl_cek')
                        ->paginate(10);

        return view('livewire.admin.rekap-retur',[
            'data' => $data
        ]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }
}
