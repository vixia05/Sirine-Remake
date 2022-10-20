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
    public $search, $npUser;
    protected $queryString = ['search'];

    public function render()
    {
        $data = ReturPikai::whereLike(['np_user','nama_user'],$this->search ?? '')
                        ->when($this->npUser, function($query, $npUser){
                            return $query->where('np_user',$npUser);
                        })
                        ->orderBy('tgl_cek')
                        ->paginate(10);

        return view('livewire.admin.rekap-retur',[
            'data'  => $data,
            'listNp'=> UserDetails::all()->sortBy('nama'),
        ]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }
}
