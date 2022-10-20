<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use App\Models\Evaluasi;
use App\Models\UserDetails;

class RekapEvaluasi extends Component
{
    use WithPagination;
    public $search,$npUser;
    protected $queryString = ['search'];

    public function render()
    {
        $data = Evaluasi::whereLike([
                            'np_user',
                            'np_kasek',
                            'np_kaun',
                            'nama_user',
                            'nama_kaun',
                            'nama_kasek',
                            'eva_kasek',
                            'eva_kaun',
                            'response'
                        ], $this->search ?? '')
                        ->when($this->npUser,function($query,$npUser){
                            return $query->where('np_user',$npUser);
                        })
                        ->orderBy('updated_at')
                        ->paginate(10);

        return view('livewire.admin.rekap-evaluasi',[
            'data'  => $data,
            'listNp'=> UserDetails::all()->sortBy('nama'),
        ]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }
}
