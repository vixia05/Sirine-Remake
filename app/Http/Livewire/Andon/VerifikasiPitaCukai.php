<?php

namespace App\Http\Livewire\Andon;

use Livewire\Component;

use App\Models\OrderPcht;
use App\Models\OrderMmea;
use App\Models\HctsPcht;
use App\Models\HctsMmea;

class VerifikasiPitaCukai extends Component
{
    public $periksaPcht,$baikPcht,$rusakPcht,$inschietPcht;
    public $periksaMmea,$baikMmea,$rusakMmea,$inschietMmea;
    public $orderPcht,$sisaP,$sisaNP,$sisaPcht,$wipPcht;
    public $orderMmea,$sisaM,$sisaH,$sisaMmea,$wipMmea;

    public function render()
    { $this->call();
        return view('livewire.andon.verifikasi-pita-cukai')->layout('layouts.andon');
    }

    public function call()
    {
        $this->orderPcht();
        $this->orderMmea();
        $this->verifikasiPcht();
        $this->verifikasiMmea();
    }

      /**
     * 1.0 Hasil Verifikasi Harian PCHT
     */
    public function verifikasiPcht()
    {
        $getVerif   = HctsPcht::where('tgl_periksa',today())
                              ->pluck('po_hcts');
        $getOrder   = OrderPcht::where('tgl_verif',today())
                              ->get();

        $harian     = OrderPcht::whereIn('no_po',$getVerif)->sum('rencet');
        $baik       = $getOrder->sum('hcs_verif');
        $rusak      = $getOrder->sum('hcts_verif');

        $inschiet   = $harian == 0 ? 0 : ($rusak / $harian) * 100;

        $this->periksaPcht  = number_format($harian,0);
        $this->baikPcht     = number_format($baik,0);
        $this->rusakPcht    = number_format($rusak,0);
        $this->inschietPcht = number_format($inschiet,2)." %";
    }

    /**
     * 3.0 Order Pcht
     */
    public function orderPcht()
    {
        $getOrder = OrderPcht::whereMonth('tgl_obc',now())->get();
        $totalOrder = $getOrder->sum('rencet');

        $orderP   = $getOrder->where('jenis','P')
                             ->sum('rencet');

        $sisaP    = $getOrder->where('jenis','P')
                             ->where('tgl_verif',null)
                             ->sum('rencet');

        $orderNP  = $getOrder->where('jenis','NP')
                               ->sum('rencet');

        $sisaNP   = $getOrder->where('jenis','NP')
                             ->where('tgl_verif',null)
                             ->sum('rencet');

        $wip    = $getOrder->where('tgl_cetak','!=',null)
                           ->where('tgl_verif','=',null)
                           ->sum('rencet');


            $this->orderPcht= number_format($totalOrder,0);
            $this->sisaP    = number_format($sisaP,0);
            $this->sisaNP   = number_format($sisaNP,0);
            $this->sisaPcht = number_format($sisaNP + $sisaP,0);
            $this->wipPcht  = number_format($wip,0);
    }


    /**
     * 3.0 Hasil Verifikasi Harian MMEA
     */
    public function verifikasiMmea()
    {
        $getVerif   = HctsMmea::where('tgl_periksa',today())
                              ->pluck('po_hcts');
        $getOrder   = OrderMmea::where('tgl_verif',today())
                              ->get();

        $harian     = OrderMmea::whereIn('no_po',$getVerif)->sum('rencet');
        $baik       = $getOrder->sum('hcs_verif');
        $rusak      = $getOrder->sum('hcts_verif');

        $inschiet   = $harian == 0 ? 0 : ($rusak / $harian) * 100;

        $this->periksaMmea  = number_format($harian,0);
        $this->baikMmea     = number_format($baik,0);
        $this->rusakMmea    = number_format($rusak,0);
        $this->inschietMmea = number_format($inschiet,2)." %";

    }

    /**
     * 4.0 Order MMEA
     */
    public function orderMmea()
    {
        $getOrder = OrderMmea::whereMonth('tgl_obc',now())->get();
        $totalOrder = $getOrder->sum('rencet');

        $orderMmea   = $getOrder->where('jenis','MMEA')
                         ->sum('rencet');

        $sisaMmea    = $getOrder->where('jenis','MMEA')
                        ->where('tgl_verif',null)
                        ->sum('rencet');

        $orderHptl  = $getOrder->where('jenis','HPTL')
                        ->sum('rencet');

        $sisaHptl   = $getOrder->where('jenis','HPTL')
                        ->where('tgl_verif',null)
                        ->sum('rencet');

        $wip    = $getOrder->where('tgl_cetak','!=',null)
                    ->where('tgl_verif','=',null)
                    ->sum('rencet');

        $this->orderMmea = number_format($totalOrder,0);
        $this->sisaM     = number_format($sisaMmea,0);
        $this->sisaH     = number_format($sisaHptl,0);
        $this->sisaMmea  = number_format($sisaMmea + $sisaHptl,0);
        $this->wipMmea   = number_format($wip,0);
    }
}
