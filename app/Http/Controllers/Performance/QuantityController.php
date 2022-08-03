<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
}
