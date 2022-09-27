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
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $data = Evaluasi::where('np_user', 'like', '%'.$this->search.'%')
                        ->orWhere('np_kasek', 'like', '%'.$this->search.'%')
                        ->orWhere('np_kaun', 'like', '%'.$this->search.'%')
                        ->orWhere('nama_user', 'like', '%'.$this->search.'%')
                        ->orWhere('nama_kaun', 'like', '%'.$this->search.'%')
                        ->orWhere('nama_kasek', 'like', '%'.$this->search.'%')
                        ->orderBy('post_date')
                        ->paginate(10);

        return view('livewire.admin.rekap-evaluasi',[
            'data' => $data,
        ]);
    }

    public function updatingsearch()
    {
        $this->resetPage();
    }
}
