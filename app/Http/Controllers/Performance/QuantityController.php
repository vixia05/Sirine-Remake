<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Unit;
use App\Models\QcPikai;
use App\Models\OrderPcht;
use App\Models\workstation;

class QuantityController extends Controller
{
    /**
     * Return Halaman Quantity Unit
     */
    public function indexUnit()
    {
        $team = Workstation::all()->sortBy('workstation');

        return view('Performance.Quantity-Unit',[
            'team' => $team,
        ]);
    }

    /**
     * Return Halaman Quantity Individu
     */
    public function indexIndividu()
    {
        return view('Performance.Quantity-Individu');
    }

    /**
     * Render Chart Untuk Menu
     * Quantity Unit Verif
     */
    public function getUnitChart(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $team = $request->team;
        $mode = $request->mode;

        // Chart Saat Start
        if($team == '' || $mode == '')
         {
            $data = QcPikai::whereBetween('tgl_verif',[$startDate,$endDate])
                            ->get()
                            ->sortBy('tgl_verif')
                            ->groupBy('tgl_verif')
                            ->map(function($sum){
                                return $sum->sum('jml_verif');
                            });
         }

        // Chart Jika Urutan Berdasarkan Pencapaian Target
        elseif($mode == 1)
         {
            $data = $this->qtyPencapaian($startDate,$endDate,$team);
         }

        // Chart Jika Urutan Berdasarkan Hasil Verifikasi
        elseif($mode == 2)
         {
            $data = $this->qtyVerifikasi($startDate,$endDate,$team);
         }

        // Chart Jika Urutan Berdasarkan Rata Rata Harian
        elseif($mode == 3)
         {
            $data = $this->qtyAverage($startDate,$endDate,$team);
         }

        return [
            'data' => $data->values(),
            'date' => array_keys($data->toArray()),
        ];
    }

    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Target
     */
    private function qtyPencapaian($startDate,$endDate,$team)
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

        $data  = QcPikai::where('id_station',$team)
                        ->whereBetween('tgl_verif',[$startDate,$endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($sum) use ($cetak){
                            // Hitung Point Jumlah Lembur
                                $couAwal  = count($sum->where('lembur',1)) * 5000;
                                $couAkhir = count($sum->where('lembur',2)) * 7500;
                                $couAwAk  = count($sum->where('lembur',3)) * 12500;
                                $lembur   = $couAwal + $couAkhir + $couAwAk;

                            // Hitung Point OBC
                              // 1. PCHT
                                $getObcPcht = $sum->where('jenis',"PCHT")
                                                  ->where('jml_obc','>',18);
                                $sumObcPcht = $getObc->sum('jml_obc');
                                $couObcPcht = count($getObcPcht);
                                $resObcPcht = $sumObcPcht == 0 ? 0 : (($sumObcPcht / ($couObcPcht * 20)) * 50);

                              // 2. MMEA

                            // Hitung Point Verifikasi
                              // 1. PCHT
                                $verifPcht  = $sum->where('jenis',"PCHT")
                                                  ->sum('jml_verif');
                                $targetPcht = array_sum($cetak) == 0 ? ($sum->sum('target')*500) : array_sum($cetak);

                              // 2. MMEA
                                $verifMmea  = $sum->where('jenis',"MMEA")
                                                  ->sum('jml_verif');
                                $targetMmea = array_sum($cetak) == 0 ? ($sum->sum('target')*500) : array_sum($cetak);

                            // Hasil Akhir
                                $endResPcht = (($verifPcht / $targetPcht) * 100) + $resObcPCHT;
                                $percent= $endResPcht;
                            return round($percent,2);
                        })->sortDesc();
        // dd($data);
        return $data;
    }

    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Verifikasi
     */
    private function qtyVerifikasi($startDate,$endDate,$team)
    {
        $data = QcPikai::where('id_station',$team)
                        ->whereBetween('tgl_verif',[$startDate,$endDate])
                        ->get()
                        ->groupBy('np_user')
                        ->map(function($sum){
                            return $sum->sum('jml_verif');
                        })->sortDesc();

        return $data;
    }

    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Rata-Rata
     */
    private function qtyAverage($startDate,$endDate,$team)
    {

    }
}
