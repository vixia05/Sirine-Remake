<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\QcPikai;

class QuantityController extends Controller
{
    public function indexUnit()
    {
        return view('Performance.Quantity-Unit');
    }

    public function indexIndividu()
    {
        return view('Performance.Quantity-Individu');
    }

    public function getUnitChart()
    {

        $data = QcPikai::whereBetween('tgl_verif',[Carbon::now()->startOfMonth(),now()])
                        ->get()
                        ->sortBy('tgl_verif')
                        ->groupBy('tgl_verif')
                        ->map(function($sum){
                            return $sum->sum('jml_verif');
                        });

        dd($data);
    }
}
