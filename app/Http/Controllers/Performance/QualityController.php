<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QualityController extends Controller
{
    public function indexUnit()
    {
        return Inertia::render('Performance/QualityUnit');
    }

    public function indexIndividu()
    {
        return Inertia::render('Performance/QualityIndividu');
    }
}
