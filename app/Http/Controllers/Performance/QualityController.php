<?php

namespace App\Http\Controllers\Performance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QualityController extends Controller
{
    public function indexUnit()
    {
        return view('Performance.Quality-Unit');
    }

    public function indexIndividu()
    {
        return view('Performance.Quality-Individu');
    }
}
