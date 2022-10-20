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
        $startDate = "2022-01-01";

        $get = QcPikai::where('np_user',$npUser)->whereYear('tgl_verif',Carbon::now());

        $data = $get->whereMonth('tgl_verif',8);
        dd($data);
    }
}
