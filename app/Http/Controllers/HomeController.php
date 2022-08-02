<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPcht;
use App\Models\OrderMmea;
use Carbon\Carbon;

// 7 di ganti now()

class HomeController extends Controller
{
    public function index()
    {
        return view('Dashboard',[
            'hcs'       => $this->hcs(),
            'order'     => $this->order(),
            'inschiet'  => $this->inschiet(),
            'chartPcht' => $this->dataChartPcht(),
            'chartMmea' => $this->dataChartMmea(),
        ]);
    }

    public function test()
    {

        return $datePcht;
    }

   /**
    * Algoritma Jumlah & Sisa Order
    */
    public function order()
    {
        $orderPcht = OrderPcht::whereMonth('tgl_obc',7)
                                ->get()
                                ->unique('no_obc')
                                ->sum('jml_order');


        $orderMmea = OrderMmea::whereMonth('tgl_obc',7)
                                ->get()
                                ->unique('no_obc')
                                ->sum('jml_order');

        $sisaOrderPcht = $orderPcht - $this->hcs()['hcsPcht'];
        $sisaOrderMmea = $orderMmea - $this->hcs()['hcsMmea'];

        return [
            'orderPcht' => $orderPcht,
            'orderMmea' => $orderMmea,
            'sisaOrderPcht' => $sisaOrderPcht,
            'sisaOrderMmea' => $sisaOrderMmea,
        ];
    }

   /**
    * Algoritma Hasil Cetak Sempurna
    */
    public function hcs()
    {
        $hcsPcht = OrderPcht::whereMonth('tgl_obc',7)
                              ->sum('hcs_qc');

        $hcsMmea = OrderMmea::whereMonth('tgl_obc',7)
                              ->sum('hcs_qc');

        return [
            'hcsPcht' => $hcsPcht,
            'hcsMmea' => $hcsMmea,
        ];

    }

   /**
    * Algoritma Hasil Cetak Tidak Sempurna & Inschiet
    */
    public function inschiet()
    {
        $hcsPcht  = $this->hcs()['hcsPcht'];
        $hcsMmea  = $this->hcs()['hcsMmea'];

        $hctsPcht = OrderPcht::whereMonth('tgl_obc',7)
                                ->sum('hcts_qc');

        $hctsMmea = OrderMmea::whereMonth('tgl_obc',7)
                                ->sum('hcts_qc');

        if($hcsPcht == !null && $hcsPcht == !null)
        {
            $insPcht  = $hctsPcht / $hcsPcht * 100;
        }
        else
        {
            $insPcht  = 0;
        }

        if($hcsMmea == !null && $hcsMmea == !null)
        {
            $insMmea  = $hctsMmea / $hcsMmea * 100;
        }
        else
        {
            $insMmea  = 0;
        }

        return [
            'insPcht'  => $insPcht,
            'insMmea'  => $insMmea,
            'hctsPcht' => $hcsPcht,
            'hctsMmea' => $hcsMmea,
        ];

    }

    public function dataChartPcht()
    {
        // Prod Gnti ke 14
        $sub2w   = carbon::today()->subdays(30);

        $data = OrderPcht::whereBetween('tgl_qc',[$sub2w,carbon::now()])
                            ->get()
                            ->sortBy('tgl_qc')
                            ->groupby('tgl_qc')
                            ->map(function($sum){
                                return $sum->sum('hcs_qc');
                            });

        $dataPcht = $data->values();
        $datePcht = $data->flip()->values();

        return [
            'dataPcht' => $dataPcht,
            'datePcht' => $datePcht,
        ];
    }

    public function dataChartMmea()
    {
        // Prod Gnti ke 14
        $sub2w   = carbon::today()->subdays(30);

        $data = OrderMmea::whereBetween('tgl_qc',[$sub2w,carbon::now()])
                            ->get()
                            ->sortBy('tgl_qc')
                            ->groupby('tgl_qc')
                            ->map(function($sum){
                                return $sum->sum('hcs_qc');
                            });

        $dataMmea = $data->values();
        $dateMmea = $data->flip()->values();

        return [
            'dataMmea' => $dataMmea,
            'dateMmea' => $dateMmea,
        ];
    }
}
