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
    public $dataPcht;
    public $startDate,$endDate,$pengiriman;

    public function mount()
    {
        $this->startDate = today()->startOfMonth()->format('Y-m-d');
        $this->endDate   = today()->format('Y-m-d');
    }

    public function render()
    {
        $this->laporanPcht();
        return view('livewire.admin.laporan-produksi',[
            'dataPcht' => $this->dataPcht,
        ]);
    }

    public function laporanPcht()
    {
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
    }
}
