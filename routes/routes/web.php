<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageuserController;

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
    return view('login');
});

Auth::routes();
//** Route Login */
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('admin/home', 'DashboardController@index')->name('admin.home')->middleware('privillege');

//**Route Group */
Route::group(['middleware' => 'auth'], function () {

    Route::get('test','TestController@test');
    Route::get('test-call','PerformanceController@call');

    //** Profile */
        Route::resource('Profile','ProfileController');
        Route::get('editpassword', ['as' => 'user.edit_password', 'uses' => 'ProfileController@edit_password']);
        Route::put('editpassword', ['as' => 'user.password', 'uses' => 'ProfileController@password']);
    
    //** Performa Pegawai */
        /** Statistik Verifikasi */
            /** Individu */
                Route::resource('performance', 'PerformanceController');                                                //** Controller Untuk Statistik Performa Kinerja*/
                Route::get('performance-qtyIndividu', ['as' => 'performance.qtyIndividu', 'uses' => 'PerformanceController@call']);
                Route::get('performance-chart', ['as' => 'performance.chart', 'uses' => 'PerformanceController@chart']);
                Route::get('performance-table', ['as' => 'performance.table', 'uses' => 'PerformanceController@update_table']);
                Route::get('getListUser', 'PerformanceController@getListUser');
            /** Unit */
                Route::get('qty-unit',['as' => 'qty-unit.index', 'uses' => 'ReportQtyUnitController@index']);
                Route::get('qty-unit/rankByQty',['as' => 'qty-unit.rankByQty', 'uses'=>'ReportQtyUnitController@getData']);
        /** Statistik Retur */
            Route::get('statistik-retur','StatistikReturController@index');
            Route::get('statistik-retur-chart','StatistikReturController@chartData');
            Route::get('defect-chart', ['as' => 'defect.chart', 'uses' => 'DefectController@chart_defect']);

    //** Menu Admin */
    // ------------- //

        /** Update Data Order */
            Route::get  ('update-data',['as' => 'update-data.index', 'uses' => 'UpdateDataController@index']);
            Route::post ('update-data/pcht',['as' => 'update-data.pcht', 'uses' => 'UpdateDataController@updatePcht']);
            Route::post ('update-data/mmea',['as' => 'update-data.mmea', 'uses' => 'UpdateDataController@updateMmea']);

        /** Management User */
            Route::resource('manage-user', 'Admin\ManageuserController');                                               //** Resource */
            Route::post ('manage-user-edit', [ManageuserController::class, 'edit']);                                    //** Edit User*/
            Route::put  ('user-update', ['as' => 'manage-user.update', 'uses'=>'Admin\ManageuserController@update']);   //** Update User*/

        /** Verifikasi Pita Cukai */
            /** Input Data Verifikasi */
                Route::resource('input-verifikasi', 'Admin\InputVerifikasiController');     //** Resource */
                Route::get  ('form-rim', 'Admin\InputVerifikasiController@form_rim');       //** Form Table Input By RIM */
                Route::get  ('form-lembar', 'Admin\InputVerifikasiController@form_lembar'); //** Form Table Input By Lembar*/
            /** Table Data Verifikasi */
                Route::resource('data-verifikasi','Admin\VerifikasiController');                                        
                Route::get  ('dataTable-Verif','Admin\VerifikasiController@update_table');                              

        /** Retur Pita Cukai */
            /** Input Data Retur/Defect */
                Route::resource('input-defect', 'InputDefectController'); 
            /** Table Data Retur/Defect */
                Route::resource('defect','DefectController');                                                          
                Route::get('info-retur','EvaluationController@info');

        /** Pesan & Evaluasi */
            Route::resource('evaluasi', 'EvaluationController');
        

    //** Andon */
        Route::get('andon','Andon\PikaiController@index');
        Route::get('andon_cetak','Andon\PikaiController@cetak');
        Route::get('andon_khazkhir','Andon\PikaiController@khazkhir');
        Route::get('andon_verifikasi','Andon\PikaiController@verifikasi');
    
});

