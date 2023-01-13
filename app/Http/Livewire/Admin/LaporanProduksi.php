<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\OrderPcht;
use App\Models\OrderMmea;

class LaporanProduksi extends Component
{
    public function render()
    {
        $test = OrderPcht::whereMonth('tgl_obc',today())
                        ->where('tgl_verif','!=',null)
                        ->orderBy('tgl_verif')
                        ->get()
                        ->groupBy('tgl_verif')
                        ->map(function($data){

                            $hcsNP  = $data->where('jenis',"NP")
                                            ->sum('hcs_verif');

                            $hcsP   = $data->where('jenis',"P")
                                            ->sum('hcs_verif');

                            $hctsNP = $data->where('jenis',"NP")
                                            ->sum('hcts_verif');

                            $hctsP  = $data->where('jenis',"P")
                                            ->sum('hcts_verif');


                            return [
                                'hcsNP' => $hcsNP,
                                'hcsP'  => $hcsP,
                                'hcsPcht'  => $hcsP+$hcsNP,
                                'hctsNP'=> $hctsNP,
                                'hctsP' => $hctsP,
                                'hctsPcht' => $hctsP+$hctsNP,
                                'totalPCHT' => $data->sum('rencet')
                            ];
                        });
        // dd($test);
        return view('livewire.admin.laporan-produksi',['test' => $test]);
    }
}
