<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

use Auth;
use App\Models\Evaluasi;
use App\Models\UserDetails;

use App\Exports\RekapEvaluasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RekapEvaluasi extends Component
{
    use WithPagination;
    public $search,$searchNp,$idEvaluasi,$startDate,$endDate;
    public $npKasek,$npKaun,$npUser;
    public $evaKasek,$evaKaun,$resUser;
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
                        ->when($this->searchNp,function($query,$searchNp){
                            return $query->where('np_user',$searchNp);
                        })
                        ->when($this->startDate,function($query,$startDate){
                            return $query->whereBetween('tgl_verif',[$startDate,$this->endDate]);
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

    public function edit($id)
    {
        $data = Evaluasi::findOrFail($id);

        $this->npKasek  = $data->np_kasek ." - " .$data->nama_kasek;
        $this->npKaun   = $data->np_kaun. " - " .$data->nama_kaun;
        $this->npUser   = $data->np_user. " - " .$data->nama_user;
        $this->evaKasek = $data->eva_kasek;
        $this->evaKaun  = $data->eva_kaun;
        $this->resUser  = $data->response;

        $this->idEvaluasi = $id;
    }

    public function update()
    {

        Evaluasi::where('id',$this->idEvaluasi)
                ->update([
                    'eva_kasek' => $this->evaKasek,
                    'eva_kaun'  => $this->evaKaun,
                    'response'  => $this->resUser,
                ]);

        session()->flash('messageUpdate', 'Data '.$this->name.' Berhasil Di Perbaharui');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $this->idEvaluasi = $id;
    }

    public function destroy()
    {
        Evaluasi::findOrFail($this->idEvaluasi)->delete();
        session()->flash('messageDelete', 'Pesan Berhasil Di Hapus');

    }


    public function exportExcel()
    {
        return (new RekapEvaluasiExport($this->searchNp))->download('rekap_evaluasi.xlsx');
    }
}
