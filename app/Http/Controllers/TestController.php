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
    public function test($startDate = new Carbon('first day of last month'), $endDate = new Carbon('last day of last month'), $team = 20)
    {
        $data  = QcPikai::where('id_station',$team)
                        ->whereBetween('tgl_verif',[$startDate,$endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($npGroup) use ($startDate){
                            $groupBy = $npGroup->sortBy('tgl_verif')
                                               ->groupBy('tgl_verif')
                                               ->map(function($sum) use ($startDate){
                                                /** Menentukan WIP */
                                                    // Subtotal Jumlah Cetak Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $sumCetakPcht = OrderPcht::where('serial_mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_cetak',[$startDate,$sum->pluck('tgl_verif')])
                                                                                    ->sum('jml_cetak') ;

                                                    // Subtotal Jumlah Baik Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $baikVerifPcht = OrderPcht::where('serial_mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_qc',[$startDate,$sum->pluck('tgl_verif')])
                                                                                    ->sum('hcs_qc');

                                                    // Subtotal Jumlah Rusak Periksa Hingga Hari Tersebut * Tanpa Memasukan Mesin Komori 4
                                                        $rusakVerifPcht = OrderPcht::where('serial_mesin','!=','TGN-1032')
                                                                                    ->whereBetween('tgl_qc',[$startDate,$sum->pluck('tgl_verif')])
                                                                                    ->sum('hcts_qc');

                                                    // Subtotal Jumlah Verifikasi Hari Itu Saja ** Kedepannya cari cara untuk subDays yang di atas untukMengganti ini
                                                        $lastVerifPcht  = OrderPcht::where('serial_mesin','!=','TGN-1032')
                                                                                    ->where('tgl_qc',$sum->pluck('tgl_verif'))
                                                                                    ->sum('rencet');

                                                    // Rumus WIP, WIP = Total Cetak - Baik Periksa + Rusak Periksa + Periksa Hari INI
                                                        $wip = $sumCetakPcht - ($baikVerifPcht + $rusakVerifPcht) + $lastVerifPcht;

                                                /** End Menentukan WIP */

                                                /** Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */
                                                    // Default Value Untuk Target Pcht
                                                        $targetPcht = 0;

                                                    // Menentukan Target Berdasarkan WIP Harian
                                                        if ($wip < 780000 && $wip > 100000){
                                                            $targetPcht = ($wip / 780000) * 15000;}

                                                        else{
                                                            $targetPcht = $sum->sum('target')*500;}

                                                /** End Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */

                                                    $hasilPcht  = $sum->sum('jml_verif');

                                                    //** Tambah Count Izin Disini <- */
                                                    $persenPcht = $targetPcht == 0 ? 0 : ($hasilPcht / $targetPcht) * 100;
                                                    $resultInd = 100;

                                                    if($wip > 250000){

                                                        if ($persenPcht < 100 && $persenPcht > 50){
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc') / 18) * 50);}

                                                        elseif ($persenPcht < 100 && $persenPcht > 0){
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc')/18) * 100);}

                                                        elseif ($persenPcht >= 100){

                                                            if($sum->sum('jml_obc') > 8){
                                                                $resultInd = $persenPcht + ((($sum->sum('jml_obc') - 8) / 18) * 50);}

                                                            else{
                                                                $resultInd = $persenPcht;}
                                                            }
                                                    }

                                                    else{
                                                        $resultInd = 100;}

                                                    return $targetPcht  ;
                                               });
                            $result = $groupBy->sum();
                            return $result;
                        })->sortDesc();
        dd($data);
        return $data;
    }
}
