<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\PengirimanPikai;

class LaporanProduksi extends Component
{
    use WithPagination;
    public $dataPcht,$akmPcht;
    public $dataMmea,$akmMmea;
    public $startDate,$endDate,$pengiriman;

    public function mount()
    {
        $this->startDate = today()->startOfMonth()->format('Y-m-d');
        $this->endDate   = today()->format('Y-m-d');
    }

    public function render()
    {
        $this->laporanPcht();
        $this->laporanMmea();
        return view('livewire.admin.laporan-produksi',[
            'dataPcht' => $this->dataPcht,
            'akmPcht'  => $this->akmPcht,
            'dataMmea' => $this->dataMmea,
            'akmMmea'  => $this->akmMmea,
        ]);
    }

    /**
     * Function FOR Laporan Harian Pcht
     */
    public function laporanPcht()
    {
        // Data Harian PCHT
        $this->dataPcht = OrderPcht::whereBetween('tgl_obc',[$this->startDate,$this->endDate])
                                    ->where('tgl_verif','!=',null)
                                    ->orderBy('tgl_verif')
                                    ->get()
                                    ->groupBy('tgl_verif')
                                    ->map(function($data,$key){

                                        $hcsNP  = $data->where('jenis',"NP")
                                                        ->sum('hcs_verif');

                                        $hcsP   = $data->where('jenis',"P")
                                                        ->sum('hcs_verif');

                                        $hctsNP = $data->where('jenis',"NP")
                                                        ->sum('hcts_verif');

                                        $hctsP  = $data->where('jenis',"P")
                                                        ->sum('hcts_verif');

                                        $cetakHarian = OrderPcht::where('tgl_cetak',$key)
                                                                ->whereMonth('tgl_obc',Carbon::parse($key))
                                                                ->sum('jml_cetak');

                                        $akmCetak   = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_cetak',[
                                                                                        Carbon::parse($this->startDate)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('rencet');

                                        $akmVerif   = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_verif',[
                                                                                        Carbon::parse($this->startDate)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('rencet');

                                        $wipPcht    = $akmCetak - $akmVerif;

                                        $akmKemas   = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_kemas',[
                                                                                        Carbon::parse($key)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('kemas');

                                        $getPengiriman = PengirimanPikai::whereMonth('bulan_order',Carbon::parse($this->startDate))
                                                                        ->where('tgl_kirim',$key)->get();

                                        $pengiriman = $getPengiriman->sum('np_s1')+
                                                    $getPengiriman->sum('np_s2')+
                                                    $getPengiriman->sum('np_s3')+
                                                    $getPengiriman->sum('p_s1')+
                                                    $getPengiriman->sum('p_s2')+
                                                    $getPengiriman->sum('p_s3');

                                        $stockKirim = $akmKemas - $pengiriman;

                                        return [
                                            'cetakHarian' => $cetakHarian,
                                            'hcsNP' => $hcsNP,
                                            'hcsP'  => $hcsP,
                                            'hctsNP'=> $hctsNP,
                                            'hctsP' => $hctsP,
                                            'hcsPcht'   => $hcsP+$hcsNP,
                                            'akmPcht'   => $akmVerif,
                                            'hctsPcht'  => $hctsP+$hctsNP,
                                            'inscPCHT'  => ($data->sum('hcts_verif')/$data->sum('rencet'))*100,
                                            'totalPCHT' => $data->sum('rencet'),
                                            'kemasPCHT' => $data->sum('kemas'),
                                            'wipPcht'   => $wipPcht,
                                            'stockKirim'=> $stockKirim,
                                            'pengiriman'=> $pengiriman,
                                        ];
                                    });
        // End Data Harian PCHT

        $orderPcht      = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->sum('rencet');

        $obcPcht        = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->get()
                                    ->unique('no_obc')
                                    ->count('no_obc');

        $sisaObcPcht    = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('tgl_verif',null)
                                    ->get()
                                    ->unique('no_obc')
                                    ->count('no_obc');

        $totalBaikNP    = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','NP')
                                    ->sum('hcs_verif');

        $totalRusakNP   = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','NP')
                                    ->sum('hcts_verif');

        $totalBaikP     = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','P')
                                    ->sum('hcs_verif');

        $totalRusakP    = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','P')
                                    ->sum('hcts_verif');

        $totalKemas     = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->sum('kemas');


        $totalPeriksa   = $totalBaikNP+$totalRusakNP+$totalBaikP+$totalRusakP;
        $inschietPcht   = ($totalRusakP+$totalRusakNP)/$totalPeriksa * 100;
        $sisaOrder      = $orderPcht - $totalPeriksa;

        $getKirim       = PengirimanPikai::whereMonth('bulan_order',Carbon::parse($this->startDate))
                                        ->whereYear('bulan_order',Carbon::parse($this->startDate))
                                        ->get();

        $totalKirim     = $getKirim->sum('np_s1')+
                          $getKirim->sum('np_s2')+
                          $getKirim->sum('np_s3')+
                          $getKirim->sum('p_s1')+
                          $getKirim->sum('p_s2')+
                          $getKirim->sum('p_s3');

        // Jatuh Tempo
        $jtPcht = OrderPcht::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                            ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                            ->where('no_po','!=',null)
                            ->where('tgl_verif',null)
                            ->orderBy('tgl_jt')
                            ->value('tgl_jt');

        $jmlJt  = OrderPcht::where('tgl_jt',Carbon::parse($jtPcht))
                            ->where('tgl_verif',null)
                            ->sum('rencet');

        // Akumulasi/Total Bulanan Pcht
        $this->akmPcht = [
            'tglJt'    => $jtPcht,
            'jmlJtPcht'=> $jmlJt,
            'sisaObcPcht'=> $sisaObcPcht,
            'obcPcht'  => $obcPcht,
            'hcsNP'    => $totalBaikNP,
            'hctsNP'   => $totalRusakNP,
            'hcsP'     => $totalBaikP,
            'hctsP'    => $totalRusakP,
            'hcsPcht'  => $totalBaikNP+$totalBaikP,
            'hctsPcht' => $totalRusakNP+$totalRusakP,
            'inscPcht' => $inschietPcht,
            'verifPcht'=> $totalPeriksa,
            'kemasPcht'=> $totalKemas,
            'kirimPcht'=> $totalKirim,
            'orderPcht'=> $orderPcht,
            'sisaPcht' => $sisaOrder,
        ];
    }

    /**
     * Function FOR Laporan Harian MMEA
     */
    public function laporanMmea()
    {
        // Data Harian MMEA
        $this->dataMmea = OrderMmea::whereBetween('tgl_obc',[$this->startDate,$this->endDate])
                                    ->where('tgl_verif','!=',null)
                                    ->orderBy('tgl_verif')
                                    ->get()
                                    ->groupBy('tgl_verif')
                                    ->map(function($data,$key){

                                        $hcsMmea  = $data->where('jenis',"MMEA")
                                                        ->sum('hcs_verif');

                                        $hcsHptl  = $data->where('jenis',"HPTL")
                                                        ->sum('hcs_verif');

                                        $hctsMmea = $data->where('jenis',"MMEA")
                                                        ->sum('hcts_verif');

                                        $hctsHptl = $data->where('jenis',"HPTL")
                                                        ->sum('hcts_verif');

                                        $cetakHarian = OrderMmea::where('tgl_cetak',$key)
                                                                ->whereMonth('tgl_obc',Carbon::parse($key))
                                                                ->sum('jml_cetak');

                                        $akmCetak   = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_cetak',[
                                                                                        Carbon::parse($this->startDate)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('rencet');

                                        $akmVerif   = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_verif',[
                                                                                        Carbon::parse($this->startDate)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('rencet');

                                        $wipMmea    = $akmCetak - $akmVerif;

                                        $akmKemas   = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                                                ->whereBetween('tgl_kemas',[
                                                                                        Carbon::parse($key)->firstOfMonth(),
                                                                                        Carbon::parse($key)
                                                                                    ])
                                                                ->sum('kemas');

                                        $getPengiriman = PengirimanPikai::whereMonth('bulan_order',Carbon::parse($this->startDate))
                                                                        ->where('tgl_kirim',$key)->get();

                                        $pengiriman = $getPengiriman->sum('mmea')+
                                                      $getPengiriman->sum('hptl');

                                        $stockKirim = $akmKemas - $pengiriman;

                                        return [
                                            'cetakHarian'  => $cetakHarian,
                                            'hcsMmea'      => $hcsMmea,
                                            'hcsHptl'      => $hcsHptl,
                                            'hctsMmea'     => $hctsMmea,
                                            'hctsHptl'     => $hctsHptl,
                                            'hcsPerekat'   => $hcsMmea+$hcsHptl,
                                            'akmPerekat'   => $akmVerif,
                                            'hctsPerekat'  => $hctsMmea+$hctsHptl,
                                            'inscPerekat'  => ($data->sum('hcts_verif')/$data->sum('rencet'))*100,
                                            'totalPerekat' => $data->sum('rencet'),
                                            'kemasPerekat' => $data->sum('kemas'),
                                            'wipMmea'      => $wipMmea,
                                            'stockKirim'   => $stockKirim,
                                            'pengiriman'   => $pengiriman,
                                        ];
                                    });
        // End Data Harian MMEA

        $orderMmea      = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->sum('rencet');

        $obcMmea        = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->get()
                                    ->unique('no_obc')
                                    ->count('no_obc');

        $sisaObcMmea    = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('tgl_verif',null)
                                    ->get()
                                    ->unique('no_obc')
                                    ->count('no_obc');

        $totalBaikMmea    = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','MMEA')
                                    ->sum('hcs_verif');

        $totalRusakMmea   = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','MMEA')
                                    ->sum('hcts_verif');

        $totalBaikHptl    = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','HPTL')
                                    ->sum('hcs_verif');

        $totalRusakHptl   = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->where('jenis','HPTL')
                                    ->sum('hcts_verif');

        $totalKemas       = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                                    ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                                    ->sum('kemas');


        $totalPeriksa   = $totalBaikMmea+$totalRusakMmea+$totalBaikHptl+$totalRusakHptl;

       if($totalRusakHptl+$totalRusakMmea !== 0 && $totalPeriksa !== 0)
        {
            $inschietMmea   = (($totalRusakHptl+$totalRusakMmea) / $totalPeriksa) * 100;
        }
        else
        {
          $inschietMmea   =  0;
        }

        $sisaOrder      = $orderMmea - $totalPeriksa;

        $getKirim       = PengirimanPikai::whereMonth('bulan_order',Carbon::parse($this->startDate))
                                        ->whereYear('bulan_order',Carbon::parse($this->startDate))
                                        ->get();

        $totalKirim     = $getKirim->sum('mmea')+
                          $getKirim->sum('hptl');

        // Jatuh Tempo
        $jtMmea = OrderMmea::whereMonth('tgl_obc',Carbon::parse($this->startDate))
                            ->whereYear('tgl_obc',Carbon::parse($this->startDate))
                            ->where('no_po','!=',null)
                            ->where('tgl_verif',null)
                            ->orderBy('tgl_jt')
                            ->value('tgl_jt');

        $jmlJt  = OrderMmea::where('tgl_jt',Carbon::parse($jtMmea))
                          ->where('tgl_verif',null)
                          ->sum('rencet');

        // Akumulasi/Total Bulanan Pcht
        $this->akmMmea = [
            'tglJt'    => $jtMmea,
            'jmlJtMmea'=> $jmlJt,
            'sisaObcMmea'=> $sisaObcMmea,
            'obcMmea'  => $obcMmea,
            'hcsMmea'  => $totalBaikMmea,
            'hctsMmea' => $totalRusakMmea,
            'hcsHptl'  => $totalBaikHptl,
            'hctsHptl' => $totalRusakHptl,
            'hcsPerekat'=> $totalBaikMmea+$totalBaikHptl,
            'hctsPerekat'=> $totalRusakMmea+$totalRusakHptl,
            'inscMmea' => $inschietMmea,
            'verifMmea'=> $totalPeriksa,
            'kemasMmea'=> $totalKemas,
            'kirimMmea'=> $totalKirim,
            'orderMmea'=> $orderMmea,
            'sisaMmea' => $sisaOrder,
        ];
    }
}
