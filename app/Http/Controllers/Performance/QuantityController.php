<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\QcPikai;

class QuantityController extends Controller
{
    /**
     * Return Halaman Quantity Unit
     */
    public function indexUnit()
    {
        return view('Performance.Quantity-Unit');
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
        if($startDate == '' || $endDate == '' || $team == '' || $mode == '')
         {
            $data = QcPikai::whereBetween('tgl_verif',[Carbon::now()->startOfMonth(),now()])
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
            $this->qtyPencapaian($startDate,$endDate,$team);
         }

        // Chart Jika Urutan Berdasarkan Hasil Verifikasi
        elseif($mode == 2)
         {
            $this->qtyVerifikasi($startDate,$endDate,$team);
         }

        // Chart Jika Urutan Berdasarkan Rata Rata Harian
        elseif($mode == 3)
         {
            $this->qtyAverage($startDate,$endDate,$team);
         }

        return [
            'data' => $data->values(),
            'date' => $data->flip()->values(),
        ];
    }

    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Target
     */
    private function qtyPencapaian($startDate,$endDate,$team)
    {

    }

    /**
     * Algoritma Perhitungan Quantitas
     * Berdasarkan Pencapaian
     * Terhadap Verifikasi
     */
    private function qtyVerifikasi($startDate,$endDate,$team)
    {

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
