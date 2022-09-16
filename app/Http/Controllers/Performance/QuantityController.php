<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Unit;
use App\Models\QcPikai;
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
        //  dd($data);

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

        $hasil = QcPikai::whereBetween('tgl_verif',[$startDate,$endDate])
                        ->get()
                        ->sortBy('tgl_verif')
                        ->groupBy('tgl_verif')
                        ->map(function($sum){
                            return $sum->sum('jml_verif');
                        });

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
