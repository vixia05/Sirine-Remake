<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Unit;
use App\Models\QcPikai;
use App\Models\OrderPcht;
use App\Models\UserDetails;
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
        return view('Performance.Quantity-Individu',[
            'team' => $team = Workstation::all()->sortBy('workstation'),
        ]);
    }

    public function npTeam(Request $request)
    {
        return UserDetails::where('id_workstation',$request->team)
                        ->orderBy('nama')
                        ->pluck('nama','np_user');
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
                                                        if ($wip < 780000 && $wip > 100000)
                                                        {
                                                            $targetPcht = ($wip / 780000) * 15000;
                                                        }
                                                        else
                                                        {
                                                            $targetPcht = $sum->sum('target')*500;
                                                        }

                                                /** End Menentukan Target Harian PCHT Berdasarkan Jumlah Lembar */

                                                    $hasilPcht  = $sum->sum('jml_verif');
                                                    //** Tambah Count Izin Disini <- */
                                                    $persenPcht = $targetPcht == 0 ? 0 : $hasilPcht / $targetPcht * 100;
                                                    $resultInd = 100;
                                                    if($wip > 250000)
                                                    {
                                                        if ($persenPcht < 100 && $persenPcht > 50)
                                                        {
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc') / 18) * 50);
                                                        }

                                                        elseif ($persenPcht < 100 && $persenPcht < 50)
                                                        {
                                                            $resultInd = $persenPcht + (($sum->sum('jml_obc')/18) * 100);
                                                        }

                                                        elseif ($persenPcht > 100)
                                                        {
                                                            if($sum->sum('jml_obc') > 8)
                                                            {
                                                                $resultInd = $persenPcht + ((($sum->sum('jml_obc') - 8) / 18) * 50);
                                                            }
                                                            else
                                                            {
                                                                $resultInd = $persenPcht;
                                                            }
                                                        }
                                                    }
                                                    else
                                                    {
                                                        $resultInd = 100;
                                                    }
                                                    return $resultInd;
                                               });
                            $result = $groupBy->avg();
                            return round($result,2);
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
        //
    }


    /**
     * Get Data Chart Individu
     */
    public function getIndividuChart(Request $request)
    {
        $npUser = $request->npUser;
        $startDate = $request->startDate;
        $endDate   = $request->endDate;

        $data = QcPikai::where('np_user',$npUser)
                    ->whereBetween('tgl_verif',[$startDate,$endDate])
                    ->orderBy('tgl_verif')
                    ->pluck('jml_verif','tgl_verif');

        return [
            'data' => $data->values(),
            'date' => array_keys($data->toArray())
        ];
    }
}
