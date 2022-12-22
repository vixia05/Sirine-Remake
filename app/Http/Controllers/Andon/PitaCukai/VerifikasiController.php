<?php

namespace App\Http\Controllers\Andon\PitaCukai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrderPcht;
use App\Models\OrderMmea;

class VerifikasiController extends Controller
{
    public function index()
    {
        return view('andon.verifikasi-pikai',[
            'orderPcht' => $this->orderPcht(),
            'orderMmea' => $this->orderMmea(),
            'verifPcht' => $this->verifikasiPcht(),
            'verifMmea' => $this->verifikasiMmea(),
        ]);
    }

    /**
     * 1.0 Hasil Verifikasi Harian PCHT
     */
    public function verifikasiPcht()
    {
        $getVerif   = OrderPcht::where('tgl_verif',today())->get();
        $harian     = $getVerif->sum('rencet');
        $baik       = $getVerif->sum('hcs_verif');
        $rusak      = $getVerif->sum('hcts_verif');

        $inschiet   = $harian == 0 ? 0 : ($rusak / $harian) * 100;

        return [
            'harian'  => $harian,
            'baik'    => $baik,
            'rusak'   => $rusak,
            'inschiet'=> $inschiet
        ];
    }

    /**
     * 3.0 Order Pcht
     */
    public function orderPcht()
    {
        $getOrder = OrderPcht::whereMonth('tgl_obc',now())->get();
        $totalOrder = $getOrder->sum('rencet');

        $orderP   = $getOrder->where('jenis','P')
                             ->sum('rencet');

        $sisaP    = $getOrder->where('jenis','P')
                             ->where('tgl_verif',null)
                             ->sum('rencet');

        $orderNP  = $getOrder->where('jenis','NP')
                               ->sum('rencet');

        $sisaNP   = $getOrder->where('jenis','NP')
                             ->where('tgl_verif',null)
                             ->sum('rencet');

        $wip    = $getOrder->where('tgl_cetak','!=',null)
                           ->where('tgl_verif','=',null)
                           ->sum('rencet');

        return [
            'total'  => $totalOrder,
            'sisaP'  => $sisaP,
            'sisaNP' => $sisaNP,
            'sisaAll'=> $sisaNP + $sisaP,
            'wip'    => $wip
        ];
    }


    /**
     * 3.0 Hasil Verifikasi Harian MMEA
     */
    public function verifikasiMmea()
    {
        $getVerif   = OrderMmea::where('tgl_verif',today())->get();
        $harian     = $getVerif->sum('rencet');
        $baik       = $getVerif->sum('hcs_verif');
        $rusak      = $getVerif->sum('hcts_verif');

        $inschiet   = $harian == 0 ? 0 : ($rusak / $harian) * 100;

        return [
            'harian'  => $harian,
            'baik'    => $baik,
            'rusak'   => $rusak,
            'inschiet'=> $inschiet
        ];
    }

    /**
     * 4.0 Order MMEA
     */
    public function orderMmea()
    {
        $getOrder = OrderMmea::whereMonth('tgl_obc',now())->get();
        $totalOrder = $getOrder->sum('rencet');

        $orderMmea   = $getOrder->where('jenis','MMEA')
                         ->sum('rencet');

        $sisaMmea    = $getOrder->where('jenis','MMEA')
                        ->where('tgl_verif',null)
                        ->sum('rencet');

        $orderHptl  = $getOrder->where('jenis','HPTL')
                        ->sum('rencet');

        $sisaHptl   = $getOrder->where('jenis','HPTL')
                        ->where('tgl_verif',null)
                        ->sum('rencet');

        $wip    = $getOrder->where('tgl_cetak','!=',null)
                    ->where('tgl_verif','=',null)
                    ->sum('rencet');

        return [
            'total' => $totalOrder,
            'sisaMmea' => $sisaMmea,
            'sisaHptl' => $sisaHptl,
            'sisaAll'=> $sisaMmea + $sisaHptl,
            'wip'    => $wip
        ];
    }
}
