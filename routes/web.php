<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Performance\QualityController;
use App\Http\Controllers\Performance\QuantityController;
use App\Http\Controllers\Performance\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth','verified']], function() {

    //--- Global User ---//
        Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard');
        Route::resource('profile',ProfileController::class);

    //--- SuperUser ---//
        Route::group(['namespace' => 'App\Http\Controllers\SuperUser'], function() {
            Route::resources([
                'createUser' => CreateUserController::class,
                'privillage' => PrivillageController::class,
                'updateOrder'=> UpdateOrderController::class,
                'jamEfektif' => JamEfektifController::class,
            ]);
        });

    //--- Admin ---//
        Route::group(['namespace' => 'App\Http\Controllers\Admin'], function() {

            // Data Pegawai
                Route::resource('dataPegawai', DataPegawaiController::class);

            // Input Data
                Route::resources([
                    'inputVerifikasi' => InputVerifikasiController::class,
                    'inputRetur'      => InputReturController::class,
                    'inputEvaluasi'   => InputEvaluasiController::class,
                ]);

            // Rekap Data
                Route::resources([
                    'rekapVerif'    => RekapVerifikasiController::class,
                    'rekapRetur'    => RekapReturController::class,
                    'rekapEvaluasi' => RekapEvaluasiController::class,
                ]);
            });


    //--- Performance Pegawai ---//

        // Quantity
            Route::get('quantity/unit',     [QuantityController::class,  'indexUnit'])->name('quantity.unit');
            Route::get('quantity/individu', [QuantityController::class,  'indexIndividu'])->name('quantity.individu');

        // Quality
            Route::get('quality/unit',     [QualityController::class, 'indexUnit'])->name('quality.unit');
            Route::get('quality/individu', [QualityController::class, 'indexIndividu'])->name('quality.individu');

        // Raport Pegawai
            Route::get('report',[ReportController::class, 'index'])->name('report');

});

require __DIR__.'/auth.php';
