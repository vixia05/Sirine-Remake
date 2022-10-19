<?php

namespace App\Http\Controllers\Performance;

use Carbon\Carbon;
use App\Models\ReturPikai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QualityController extends Controller
{
    public function indexUnit()
    {
        return view('Performance.Quality-Unit',[
            'data' => $this->qualityUnit(Carbon::now()),
        ]);
    }

    public function indexIndividu()
    {
        return view('Performance.Quality-Individu');
    }

    /**
     * Chart Retur Unit Per-Tahun
     */
    public function qualityUnit($year)
    {
        $jan = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',1)->value('jml_retur');
        $feb = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',2)->value('jml_retur');
        $mar = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',3)->value('jml_retur');
        $apr = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',4)->value('jml_retur');
        $mei = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',5)->value('jml_retur');
        $jun = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',6)->value('jml_retur');
        $jul = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',7)->value('jml_retur');
        $agu = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',8)->value('jml_retur');
        $sep = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',9)->value('jml_retur');
        $okt = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',10)->value('jml_retur');
        $nov = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',11)->value('jml_retur');
        $des = ReturPikai::whereYear('tgl_cek',$year)->whereMonth('tgl_cek',12)->value('jml_retur');

        return  [$jan,$feb,$mar,$apr,$mei,$jun,$jul,$agu,$sep,$okt,$nov,$des];
    }

    /**
     * Chart Retur Individu Per Thaun
     */
    public function qualtyIndividu($npUser,$year)
    {
        $jan = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',1)->sum('jml_retur');
        $feb = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',2)->sum('jml_retur');
        $mar = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',3)->sum('jml_retur');
        $apr = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',4)->sum('jml_retur');
        $mei = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',5)->sum('jml_retur');
        $jun = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',6)->sum('jml_retur');
        $jul = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',7)->sum('jml_retur');
        $agu = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',8)->sum('jml_retur');
        $sep = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',9)->sum('jml_retur');
        $okt = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',10)->sum('jml_retur');
        $nov = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',11)->sum('jml_retur');
        $des = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->whereMonth('tgl_cek',12)->sum('jml_retur');

        $sumRetur = [$jan,$feb,$mar,$apr,$mei,$jun,$jul,$agu,$sep,$okt,$nov,$des];

        $nodaUsr      = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('noda');
        $blurUsr      = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('blur');
        $plooiUsr     = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('plooi');
        $tipisUsr     = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('tipis');
        $sobekUsr     = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('sobek');
        $botakUsr     = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('botak');
        $bloborUsr    = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('blobor');
        $diecutUsr    = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('diecut');
        $missRegUsr   = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('miss_reg');
        $gradasiUsr   = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('gradasi');
        $hologramUsr  = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('hologram');
        $tercampurUsr = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('tercampur');
        $terpotongUsr = ReturPikai::where('np_user',$npUser)->whereYear('tgl_cek',$year)->sum('terpotong');

        $jenisReturUsr = $nodaUsr + $blurUsr + $plooiUsr + $tipisUsr + $sobekUsr + $botakUsr + $bloborUsr + $diecutUsr + $missRegUsr + $gradasiUsr + $hologramUsr + $tercampurUsr + $terpotongUsr ;
    }
}
