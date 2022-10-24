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
    public function test()
    {
        $getVerif   = OrderPcht::where('tgl_qc',today())->get();
        $verifikasi = $getVerif->sum('rencet');
        $baikVerif  = $getVerif->sum('hcs_qc');
        $rusakVerif = $getVerif->sum('hcts_qc');

        $data = OrderPcht::whereMonth('tgl_obc',today())
                        ->where('tgl_cetak','!=',null)
                        ->where('tgl_qc','=',null)
                        ->sum('rencet');
        dd($data);
    }
}
