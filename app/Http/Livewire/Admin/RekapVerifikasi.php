<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use DB;
use Auth;
use App\Models\QcPikai;
use App\Models\UserDetails;

class RekapVerifikasi extends Component
{

    use WithPagination;
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $data = QcPikai::where('np_user', 'like', '%'.$this->search.'%')
                        ->orWhere('nama_user', 'like', '%'.$this->search.'%')
                        ->orWhere('tgl_verif', 'like', '%'.$this->search.'%')
                        ->orWhere('jml_verif', 'like', '%'.$this->search.'%')
                        ->orWhere('jml_obc', 'like', '%'.$this->search.'%')
                        ->orWhere('target', 'like', '%'.$this->search.'%')
                        ->orWhere('lembur', 'like', '%'.$this->search.'%')
                        ->orderBy('tgl_verif')
                        ->paginate(10);

        return view('livewire.admin.rekap-verifikasi',[
            'data' => $data,
            'npUser' => UserDetails::pluck('np_user'),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
