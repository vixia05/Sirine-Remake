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
    public $evaluator,$npUser;
    public $evaluasi,$response;
    protected $queryString = ['search'];

    public function render()
    {
        $data = Evaluasi::whereLike([
                            'np_user',
                            'np_evaluator',
                            'evaluasi',
                            'response',
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

        $this->evaluator= $data->np_evaluator ." - " .$data->evaluatorDetails->nama;
        $this->npUser   = $data->np_user. " - " .$data->userDetails->nama;
        $this->evaluasi = $data->evaluasi;
        $this->response = $data->response;

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
