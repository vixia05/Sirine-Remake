<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\pcht;
use App\Models\privilage;
use App\Models\pcht_year;
use App\Models\verif_pikai;
use App\Models\defect_pikai;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function level()
    {
        $level = \Helper::call()->level();
        return $level;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($this->baikPcht() != 0 || $this->orderPcht() != 0)
        {
            $progressPcht  = $this->baikPcht() / $this->orderPcht() * 100;
        }
        else
        {
            $progressPcht = 0;
        }
        
        $sisaOrderPcht = $this->orderPcht() - $this->baikPcht() ;
        
        if($this->level() === 0 || $this->level() >2)
        {
            return view('menu.dashboard',[
    
                'totalOrderPcht' => $this->orderPcht(),
                'totalRusakPcht' => $this->rusakPcht(),
                'totalReturPcht' => $this->defectPcht(),
                'dataReturPcht'  => $this->qtyDefectPcht(),
                'inschietPcht'   => $this->inschietPcht(),
                'progressPcht'   => $progressPcht,
                'sisaOrderPcht'  => $sisaOrderPcht,
                'dataVerifPcht'  => $this->qtyPcht(),
    
            ]);
        }
        
        elseif($this->level() === 1 || $this->level() === 2)
        {
            if($this->sumVerifInd() != 0 || $this->goalVerif() != 0)
            {
                $target = ($this->sumVerifInd() / $this->goalVerif()) * 100;
            }
            else
            {
                $target = 100;
            }
            $rekapVerf = [$this->sumVerifInd(),(int)$this->avgVerif()];

            return view('menu.dashboard',[
                
                'namaUser'  => Auth::user()->nama,
                'goalVerif' => $target,
                'avgVerif'  => $this->avgVerif(),
                'sumVerif'  => $this->sumVerifInd(),
                'sumDefect' => $this->sumDefectInd(),
                'rekapVerif'     => $rekapVerf,
                'qtyVerifUnit'   => $this->qtyPcht(),
                'qtyVerifInd'    => $this->qtyVerifInd(),
                'sumDefectUnit'  => $this->defectPcht(),
                'totalReturInd'  => $this->qtyDefectInd(),
                'totalReturUnit' => $this->qtyDefectPcht(),
            ]);
        }
        else
        {
            return abort('404');
        }
    }

    /****************************** Monthly Order Calculation ******************************/
        /******************************************************************************/

        /**
         * Qty Verifikasi PCHT Tahunan
         */
        public function qtyPcht()
        {
            $qtyVerif = DB::table('bulanan_pcht')
                          ->WhereYear('tgl_verifikasi',carbon::now())
                          ->select(DB::raw('SUM(rencet) as total_rencet, MONTH( tgl_verifikasi ) as month'))
                          ->groupBy(DB::raw('MONTH(tgl_verifikasi) ASC'))
                          ->pluck('total_rencet');

            return $qtyVerif;
        }

        /**
         * Total Order PCHT Bulanan
         */
        public function orderPcht()
        {
            $orderPcht = DB::table('bulanan_pcht')
                           ->whereMonth('tgl_obc',carbon::now())
                           ->sum('rencet');

            return $orderPcht;
        }

        /**
         * Qty Baik PCHT
         */
        public function baikPcht()
        {
            $baikVerif = DB::table('bulanan_pcht')
                            ->whereMonth('tgl_obc',carbon::now())
                            ->sum('baik_verifikasi');

            return $baikVerif;
        }

        /**
         * Qty Rusak PCHT
         */
        public function rusakPcht()
        {
            $rusakVerif = DB::table('bulanan_pcht')
                            ->whereMonth('tgl_obc',carbon::now())
                            ->sum('rusak_verifikasi');

            return $rusakVerif;
        }

        /**
         * Total Inschiet Pcht Bulanan
         */
        public function inschietPcht()
        {
            $baikVerif  = $this->baikPcht();
            $rusakVerif = $this->rusakPcht();

            if($baikVerif != 0 || $rusakVerif != 0)
            {
                $inschietPcht = $rusakVerif / $baikVerif * 100;
            }
            else
            {
                $inschietPcht = 0;
            }

            return number_format($inschietPcht,2);
        }

        public function avgVerif()
        {
            $average = verif_pikai::whereMonth('tgl_verif',carbon::now())
                                  ->get()
                                  ->groupBy('np_user')
                                  ->map(function($sum){
                                      return $sum->sum('jml_lembar');
                                  })
                                  ->avg();
            return $average;
        }

        public function avgQtyVerif()
        {
            $averageVerif = verif_pikai::whereYear('tgl_verif',carbon::now())
                                       ->get()
                                       ->groupBy(function($val){
                                           return carbon::parse($val->tgl_verif)->format('M');
                                       })
                                       ->map(function($sum){
                                           
                                           $sumNp = $sum->groupBy('np_user')
                                                      ->map(function($val){
                                                           return $val->sum('jml_lembar');
                                                       });
                                                   
                                           return $sumNp->avg();
                                       });
            
            return $averageVerif;
        }
    
    /****************************** Reject Product Calculation ******************************/
        /******************************************************************************/
        

        /**
         * Defect Product Pcht
         */
        public function defectPcht()
        {
            $defect = DB::table('defect_pikai')
                        ->whereYear('tgl_cek',carbon::now())
                        ->sum('total_retur');

            return $defect;
        }

        /**
         * Qty Defect Tahunan
         */
        public function qtyDefectPcht()
        {
            $jan = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',1)->sum('total_retur');
            $feb = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',2)->sum('total_retur');
            $mar = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',3)->sum('total_retur');
            $apr = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',4)->sum('total_retur');
            $mei = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',5)->sum('total_retur');
            $jun = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',6)->sum('total_retur');
            $jul = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',7)->sum('total_retur');
            $agu = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',8)->sum('total_retur');
            $sep = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',9)->sum('total_retur');
            $okt = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',10)->sum('total_retur');
            $nov = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',11)->sum('total_retur');
            $des = DB::table('defect_pikai')->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',12)->sum('total_retur');

            $arrayDef = [$jan,$feb,$mar,$apr,$mei,$jun,$jul,$agu,$sep,$okt,$nov,$des];

            return $arrayDef;
        }
    
        /**************************** Individual Resume Calculation ******************************/
            /******************************************************************************/
            
        public function sumVerifInd()
        {
            $npUser = \Helper::call()->AuthNP();

            $sumIndividu = verif_pikai::where('np_user',$npUser)
                                      ->whereMonth('tgl_verif',carbon::now())
                                      ->sum('jml_lembar');

            return $sumIndividu;
        }

        public function goalVerif()
        {

            $target   = verif_pikai::where('np_user',Auth::user()->np)
                                   ->whereMonth('tgl_verif',carbon::now())
                                   ->where('jml_lembar','>',0)
                                   ->where('lembur','-')
                                   ->count()*15000;

            $targetA   = verif_pikai::where('np_user',Auth::user()->np)
                                   ->whereMonth('tgl_verif',carbon::now())
                                   ->where('jml_lembar','>',0)
                                   ->where('lembur','Awal')
                                   ->count()*20000;

            $targetAK   = verif_pikai::where('np_user',Auth::user()->np)
                                   ->whereMonth('tgl_verif',carbon::now())
                                   ->where('jml_lembar','>',0)
                                   ->where('lembur','Akhir')
                                   ->count()*22500;

            $targetAA   = verif_pikai::where('np_user',Auth::user()->np)
                                   ->whereMonth('tgl_verif',carbon::now())
                                   ->where('jml_lembar','>',0)
                                   ->where('lembur','Awal Akhir')
                                   ->count()*27500;

            $sumTarget = $target + $targetA +$targetAK + $targetAA;

            return $sumTarget;
        }
            
        public function qtyVerifInd()
        {
            $npUser = \Helper::call()->AuthNP();

            $qtyVerifInd = DB::table('verif_pikai')
                             ->where('np_user',$npUser)
                             ->whereYear('tgl_verif',carbon::now())
                             ->select(DB::raw('ifnull(SUM(jml_lembar),0) as total_lembar, MONTH( tgl_verif ) as month'))
                             ->groupBy(DB::raw('MONTH(tgl_verif) ASC'))
                             ->pluck('total_lembar');

            return $qtyVerifInd;
        }

        public function sumDefectInd()
        {
            $sum = defect_pikai::where('np_user',\Helper::call()->AuthNP())
                               ->whereYear('tgl_cek',carbon::now())
                               ->sum('total_retur');
            
            return $sum;
        }

        /**
         * Qty Defect Tahunan
         */
        public function qtyDefectInd()
        {
            $jan = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',1)->sum('total_retur');
            $feb = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',2)->sum('total_retur');
            $mar = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',3)->sum('total_retur');
            $apr = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',4)->sum('total_retur');
            $mei = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',5)->sum('total_retur');
            $jun = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',6)->sum('total_retur');
            $jul = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',7)->sum('total_retur');
            $agu = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',8)->sum('total_retur');
            $sep = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',9)->sum('total_retur');
            $okt = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',10)->sum('total_retur');
            $nov = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',11)->sum('total_retur');
            $des = defect_pikai::where('np_user',\Helper::call()->AuthNP())->whereYear('tgl_cek',carbon::now())->whereMonth('tgl_cek',12)->sum('total_retur');

            $arrayDef = [$jan,$feb,$mar,$apr,$mei,$jun,$jul,$agu,$sep,$okt,$nov,$des];

            return $arrayDef;
        }
    
}
