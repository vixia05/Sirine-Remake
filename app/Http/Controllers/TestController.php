<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Unit;
use App\Models\QcPikai;
use App\Models\OrderPcht;
use App\Models\workstation;

class TestController extends Controller
{
    public function test($startDate = new Carbon('first day of last month'), $endDate = new Carbon('last day of last month'), $team = 18)
    {

        $cetak  = OrderPcht::whereBetween('tgl_qc',[$startDate,$endDate])
                        ->get()
                        ->sortBy('tgl_qc')
                        ->groupBy('tgl_qc')
                        ->map(function($sum){
                            $verif  = $sum->sum('rencet');
                            $target = ((($verif / 750000))*30) * 500;
                            $result = $target < 15000 ? $target : 15000;
                            return $result;
                        })->toArray();

        // $data  = QcPikai::where('id_station',$team)
        //                 ->whereBetween('tgl_verif',[$startDate,$endDate])
        //                 ->get()
        //                 ->groupBy('np_user')
        //                 ->map(function($sum) use ($cetak){
        //                     // Hitung Point Jumlah Lembur
        //                         $couAwal  = count($sum->where('lembur',1)) * 5000;
        //                         $couAkhir = count($sum->where('lembur',2)) * 7500;
        //                         $couAwAk  = count($sum->where('lembur',3)) * 12500;
        //                         $lembur   = $couAwal + $couAkhir + $couAwAk;

        //                     // Hitung Point OBC
        //                       // 1. PCHT
        //                         $getObcPcht = $sum->where('jenis',"PCHT")
        //                                           ->where('jml_obc','>',18);
        //                         $sumObcPcht = $getObcPcht->sum('jml_obc');
        //                         $couObcPcht = count($getObcPcht);
        //                         $resObcPcht = $sumObcPcht == 0 ? 0 : (($sumObcPcht / ($couObcPcht * 20)) * 50);

        //                       // 2. MMEA

        //                     // Hitung Point Verifikasi
        //                       // 1. PCHT
        //                         $verifPcht  = $sum->where('jenis',"PCHT")
        //                                           ->sum('jml_verif');
        //                         $targetPcht = array_sum($cetak) == 0 ? ($sum->sum('target')*500) : array_sum($cetak);

        //                       // 2. MMEA
        //                         $verifMmea  = $sum->where('jenis',"MMEA")
        //                                           ->sum('jml_verif');
        //                         $targetMmea = array_sum($cetak) == 0 ? ($sum->sum('target')*500) : array_sum($cetak);

        //                     // Hasil Akhir
        //                         $endResPcht = (($verifPcht / $targetPcht) * 100) + $resObcPcht;
        //                         $percent= $endResPcht;
        //                     return round($percent,2);
        //                 })->sortDesc();

        $data  = QcPikai::where('id_station',$team)
                        ->whereBetween('tgl_verif',[$startDate,$endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($npGroup) use ($cetak){
                            $groupBy = $npGroup->groupBy('tgl_verif')
                                               ->map(function($sum){
                                                //** Target Kasih Kondisi WIP  */
                                                $targetPcht = $sum->sum('target')*500;
                                                $hasilPcht  = $sum->sum('jml_verif');
                                                //** Tambah Count Izin Disini <- */
                                                $persenPcht = $hasilPcht / $targetPcht * 100;
                                                if ($persenPcht < 100 && $persenPcht > 50 )
                                                {
                                                    $resultInd = $persenPcht + (($sum->sum('jml_obc') / 20) * 0.5);
                                                }

                                                elseif ($persenPcht < 100 && $persenPcht < 50)
                                                {
                                                    $resultInd = $persenPcht + ($sum->sum('jml_obc')/20);
                                                }

                                                else
                                                {
                                                    $resultInd = $persenPcht;
                                                }
                                                return $resultInd;
                                               });
                            $result = $groupBy;
                            return $result;
                        })->sortDesc();
        dd($data);
        return $data;
    }
}
