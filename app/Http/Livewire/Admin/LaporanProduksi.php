<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Carbon\Carbon;

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
                        ->map(function($data,$key){


                            $hcsNP  = $data->where('jenis',"NP")
                                            ->sum('hcs_verif');

                            $hcsP   = $data->where('jenis',"P")
                                            ->sum('hcs_verif');

                            $hctsNP = $data->where('jenis',"NP")
                                            ->sum('hcts_verif');

                            $hctsP  = $data->where('jenis',"P")
                                            ->sum('hcts_verif');

                            $cetakHarian = OrderPcht::where('tgl_cetak',$key)->sum('jml_cetak');

                            $wipPcht = OrderPcht::whereMonth('tgl_obc',today())
                                                ->whereBetween('tgl_cetak',[
                                                                            Carbon::parse($key)->firstOfMonth(),
                                                                            Carbon::parse($key)->subday(1)
                                                                           ])
                                                    ->sum('jml_cetak')-$data->sum('rencet');


                            return [
                                'cetakHarian' => $cetakHarian,
                                'hcsNP' => $hcsNP,
                                'hcsP'  => $hcsP,
                                'hcsPcht'  => $hcsP+$hcsNP,
                                'hctsNP'=> $hctsNP,
                                'hctsP' => $hctsP,
                                'hctsPcht' => $hctsP+$hctsNP,
                                'inscPCHT'  => ($data->sum('hcts_verif')/$data->sum('rencet'))*100,
                                'totalPCHT' => $data->sum('rencet'),
                                'kemasPCHT' => $data->sum('kemas'),
                                'wipPcht'   => $wipPcht
                            ];
                        });
                        dd($test);
        return view('livewire.admin.laporan-produksi',['test' => $test]);
    }
}
