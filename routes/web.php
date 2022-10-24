<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// Namespace Performance
use App\Http\Controllers\Performance\QualityController;
use App\Http\Controllers\Performance\QuantityController;
use App\Http\Controllers\Performance\ReportController;

// Namespace Andon
use App\Http\Controllers\Andon\PitaCukai\VerifikasiController;
use App\Http\Controllers\Andon\PitaCukai\CetakController;
use App\Http\Controllers\Andon\PitaCukai\KhazwalController;
use App\Http\Controllers\Andon\PitaCukai\KhazkhirController;

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

Route::view('/test', 'test');
Route::get('test/con', [TestController::class, 'test'])->name('test/con');

Route::group(['middleware' => ['auth','verified']], function() {

    //--- Global User ---//
        Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard');
        Route::resource('profile',ProfileController::class);

    //--- SuperUser ---//
        Route::group(['namespace' => 'App\Http\Controllers\SuperUser'], function() {
            Route::resources([
                'users'      => UsersController::class,
                'privillage' => PrivillageController::class,
                'updateOrder'=> UpdateOrderController::class,
                'jamEfektif' => JamEfektifController::class,
            ]);
        });

    //--- Admin ---//
        Route::group(['namespace' => 'App\Http\Controllers\Admin'], function() {

            // Data Pegawai
                Route::resource('dataPegawai', DataPegawaiController::class);
                Route::get('dataPegawai/export', 'DataPegawaiController@export')->name('dataPegawai.export');

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
            Route::get('quantity/npTeam',   [QuantityController::class,  'npTeam'])->name('npTeam');
            Route::get('quantity/chartUnit',[QuantityController::class,  'getUnitChart'])->name('chartUnit');
            Route::get('quantity/individu', [QuantityController::class,  'indexIndividu'])->name('quantity.individu');
            Route::get('quantity/chartIndividu',[QuantityController::class,  'getIndividuChart'])->name('chartIndividu');

        // Quality
            Route::get('quality/unit',     [QualityController::class, 'indexUnit'])->name('quality.unit');
            Route::get('quality/individu', [QualityController::class, 'indexIndividu'])->name('quality.individu');

        // Raport Pegawai
            Route::get('report',[ReportController::class, 'index'])->name('report');

    //--- Other Utilities ---//

        // DropDown Quantity Indiviud
            // Route::get('quantity/')

});

//--- Andon ---//
//------------//

    //--- Pita Cukai ---//
        Route::get('andon/khazwalPikai', [KhazwalController::class, 'index'])->name('andon.khazwalPikai');
        Route::get('andon/cetakPikai',   [CetakController::class,   'index'])->name('andon.cetakPikai');
        Route::get('andon/verifPikai',   [VerifikasiController::class, 'index'])->name('andon.verifPikai');
        Route::get('andon/kahzkhirPikai',[KhazkhirController::class,   'index'])->name('andon.kazkhirPikai');

require __DIR__.'/auth.php';
