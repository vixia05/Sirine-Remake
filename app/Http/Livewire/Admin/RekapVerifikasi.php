<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use DB;
use Auth;
use App\Models\QcPikai;
use App\Models\UserDetails;

use App\Exports\RekapVerifExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RekapVerifikasi extends Component
{

    use WithPagination;
    public $search,$npUser;
    public $idUser,$startDate,$endDate;
    protected $queryString = ['search'];

    public function render()
    {
        $data = QcPikai::whereLike(['np_user','nama_user'],$this->search ?? '')
                        ->when($this->npUser,function($query,$npUser){
                            return $query->where('np_user',$npUser);
                        })
                        ->when($this->startDate,function($query,$startDate){
                            return $query->whereBetween('tgl_verif',[$startDate,$this->endDate]);
                        })
                        ->orderBy('tgl_verif')
                        ->paginate(10);

        return view('livewire.admin.rekap-verifikasi',[
            'test' => $this->endDate,
            'data' => $data,
            'listNp' => UserDetails::all()->sortBy('nama'),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function show($id)
    {
        $this->idUser = $id;
    }

    public function destroy()
    {
        QcPikai::where('id',$this->idUser)->delete();
    }

    public function exportExcel()
    {
        return (new RekapVerifExport($this->npUser))->download('rekap_verifikasi.xlsx');
    }
}
