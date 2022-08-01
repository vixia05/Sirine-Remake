<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuantityController extends Controller
{
    public function indexUnit()
    {
        return Inertia::render('Performance/QuantityUnit');
    }

    public function indexIndividu()
    {
        return Inertia::render('Performance/QuantityIndividu');
    }
}
