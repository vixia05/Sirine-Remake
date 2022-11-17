<?php

namespace App\Http\Livewire\Operator;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\UserDetails;

class DataProdVerif extends Component
{
    use WithPagination;
    public $search,$npUser,$startDate,$endDate;
    protected $queryString = ['search'];

    public function render()
    {
        $listNp = UserDetails::all();
        return view('livewire.operator.data-prod-verif',[
            'data'  => $data,
            'listNp' => $listNp,
        ]);
    }
}
