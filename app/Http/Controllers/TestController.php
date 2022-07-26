<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\verif_pikai;
use App\Models\dataPcht;
use App\Models\defect_pikai;
use App\Models\privilage;
use App\Models\profile;
use App\Models\defect;
use Carbon\Carbon;

class TestController extends Controller
{
    public function test($station = 18)
    {  
       
        $target = verif_pikai::whereMonth('tgl_verif',now())
                             ->get()
                             ->groupBy('np_user')
                             ->map(function($data){
                                $sum    = $data->sum('jml_lembar');
                                $target = $data->sum('target')*500;
                                $percent= ($sum / $target) * 100;
                                return $percent;
                             })->sortDesc();

        dd($target);
        return $get;
    }
}
