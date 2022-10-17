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

        $data = QcPikai::where('np_user',$npUser)
                    ->whereYear('tgl_verif',$startDate)
                    ->get()
                    ->sortBy('tgl_verif')
                    ->groupBy(function($m){
                        return Carbon::parse($m->tgl_verif)->format('m');
                    })
                    ->map(function($sum){
                        return $sum->sum('jml_verif');
                    });
        dd($data);
    }
}
