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
        $npUser = "I431";
        $startDate = "2022-09-01";
        $endDate   = "2022-09-30";

        $data = QcPikai::where('np_user',$npUser)
                    ->whereBetween('tgl_verif',[$startDate,$endDate])
                    ->orderBy('tgl_verif')
                    ->pluck('jml_verif','tgl_verif')
                    ->toArray();
        dd(array_keys($data));
    }
}
