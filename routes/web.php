<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SuperUser\UpdateOrderController;
use App\Http\Livewire\SuperUser\JamEfektifs;

// Namespace CMS
use App\Http\Livewire\Cms\ListMenu;
use App\Http\Livewire\Cms\TemplateMenu;

// Namespace Performance
use App\Http\Livewire\Performance\QuantityUnit;
use App\Http\Livewire\Performance\QuantityIndividu;
use App\Http\Livewire\Performance\QualityUnit;
use App\Http\Livewire\Performance\QualityIndividu;
use App\Http\Livewire\Performance\ReportPegawai;
use App\Http\Controllers\Performance\ReportController;

// Namespace Andon
use App\Http\Livewire\Andon\VerifikasiPitaCukai;
use App\Http\Controllers\Andon\PitaCukai\CetakController;
use App\Http\Controllers\Andon\PitaCukai\KhazwalController;
use App\Http\Controllers\Andon\PitaCukai\KhazkhirController;

// Namespace Data Produksi
use App\Http\Livewire\Admin\RekapRetur;
use App\Http\Livewire\Admin\LaporanProduksi;
use App\Http\Livewire\Operator\DataProdVerif;

// Namespace Pengiriman
use App\Http\Livewire\Pengiriman\PengirimanPikai;

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


Route::group(['middleware' => ['auth','verified']], function() {

        Route::get('/', [HomeController::class, 'index']);

    //--- Global User ---//
        Route::get('dashboard',[HomeController::class, 'index'])
             ->name('dashboard');
        Route::resource('profile',ProfileController::class);

    //--- Content Management ---//
        Route::group(['middleware' => 'level10Access'], function(){

            Route::get('listMenu',ListMenu::class)
                 ->name('listMenu');

            Route::get('templateMenu',TemplateMenu::class)
                 ->name('templateMenu');

        });
    //--- SuperUser ---//
        Route::group(['namespace' => 'App\Http\Controllers\SuperUser', 'middleware' => 'level10Access'], function() {

            Route::get('updateOrder',[UpdateOrderController::class, 'index'])
                ->name('updateOrder.index');

            Route::post('updateOrder/Pcht',[UpdateOrderController::class, 'updatePcht'])
                 ->name('updateOrder.pcht');

            Route::post('updateOrder/Mmea',[UpdateOrderController::class, 'updateMmea'])
                 ->name('updateOrder.mmea');

            Route::resources([
                'users'      => UsersController::class,
                'privillage' => PrivillageController::class,
            ]);

        });

        Route::get('jamEfektifs',JamEfektifs::class)
             ->name('jamEfektif');

    //--- Admin ---//
        Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'level1Access'], function() {

            // Data Pegawai
                Route::group(['middleware' => 'level3Access'], function(){
                    Route::resource('dataPegawai', DataPegawaiController::class);
                    Route::get('dataPegawai/export', 'DataPegawaiController@export')
                        ->name('dataPegawai.export');
                });

            // Input Data
                Route::resources([
                    'inputVerifikasi' => InputVerifikasiController::class,
                    'inputRetur'      => InputReturController::class,
                ]);
                Route::resource('inputEvaluasi', InputEvaluasiController::class)
                     ->middleware('level3Access');

            // Rekap Data
                Route::resources([
                    'rekapVerif'    => RekapVerifikasiController::class,
                ]);
                Route::resource('rekapEvaluasi', RekapEvaluasiController::class)
                     ->middleware('level3Access');
            });

        Route::get('rekapRetur',RekapRetur::class)
             ->name('rekapRetur')
             ->middleware('level1Access');

        Route::get('laporanProduksi',LaporanProduksi::class)
             ->name('laporanProduksi');


    //--- Performance Pegawai ---//

        // Quantity
            Route::name('quantity.')
               ->prefix('quantity')
               ->group(function () {
                    Route::get('unit',QuantityUnit::class)
                        ->name('unit')
                        ->middleware('level3Access');
                    Route::get('individu', QuantityIndividu::class)
                        ->name('individu');
               });

        // Quality
            Route::name('quality.')
                ->prefix('quality')
                ->group(function () {
                    Route::get('unit',QualityUnit::class)
                        ->name('unit')
                        ->middleware('level3Access');
                    Route::get('individu',QualityIndividu::class)
                        ->name('individu');
                });

        // Raport Pegawai
            Route::get('report',ReportPegawai::class)
                ->name('report')
                ->middleware('level3Access');



    //--- Input Operator ---//

        // Pita Cukai
        Route::group(['middleware' => ['level1Access']], function(){

            Route::view('operator.verif-pikai', 'operator.verif-pikai')
                 ->name('operator.verif-pikai');

            Route::get('operator.data-prod-verif', DataProdVerif::class)
                 ->name('operator.data-prod-verif');
        });

    //--- Pengiriman ---//

        // Pita Cukai
        Route::get('pengiriman.pikai',PengirimanPikai::class)
             ->name('pengiriman.pikai');

    //--- Other Utilities ---//

        // DropDown Quantity Indiviud
            // Route::get('quantity/')

});

//--- Andon ---//
//------------//

    //--- Pita Cukai ---//
    Route::name('andon.')
        ->prefix('andon')
        ->group(function () {
              Route::get('khazwalPikai', [KhazwalController::class, 'index'])->name('khazwalPikai');
              Route::get('cetakPikai',   [CetakController::class,   'index'])->name('cetakPikai');

              // Verifikasi Pikai
              Route::get('verifPikai',VerifikasiPitaCukai::class)->name('verifPikai');
            //   Route::get('verifPikai/verifPcht',[VerifikasiController::class, 'verifikasiPcht'])->name('verifPcht');
            //   Route::get('verifPikai/verifMmea',[VerifikasiController::class, 'verifikasiMmea'])->name('verifMmea');
            //   Route::get('verifPikai/orderOcht',[VerifikasiController::class, 'orderPcht'])->name('orderPcht');
            //   Route::get('verifPikai/orderMmea',[VerifikasiController::class, 'orderMmea'])->name('orderMmea');

              // Khazanah Akhir Pikai
              Route::get('kahzkhirPikai',[KhazkhirController::class,   'index'])->name('khazkhirPikai');
          });


require __DIR__.'/auth.php';
