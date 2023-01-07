<?php

namespace App\Exports;

use App\Models\HctsPcht;
use App\Models\HctsMmea;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ChecklistVerifExport implements FromQuery, WithHeadings, ShouldAutoSize, WithStyles
{
    use Exportable;
    private $startDate;
    private $endDate;
    private $jenis;

    public function __construct($startDate, $endDate, $jenis)
    {
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
        $this->jenis     = $jenis;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function headings(): array
    {
        return [
            "No",
            'Tgl Verif',
            "OBC",
            "Nomor PO",
            "Cetak",
            "Baik",
            "Jumlah Rusak",
            'blobor',
            'blanko',
            'blur',
            'botak',
            'diecut',
            'gradasi',
            'hologram',
            'miss_reg',
            'minyak',
            'noda',
            'plooi',
            'sobek',
            'tercampur',
            'terpotong',
            'tipis',
            "Keterangan",
            "petugas1",
            "petugas2",
            "Mesin",
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {

        if($this->jenis === "PCHT")
        {
            $dataExcel = HctsPcht::whereBetween('tgl_periksa',[$this->startDate,$this->endDate])
                                ->join('order_pcht','po_hcts','=','order_pcht.no_po')
                                ->select(
                                    'hcts_pcht.id',
                                    'hcts_pcht.tgl_periksa',
                                    'order_pcht.no_obc',
                                    'hcts_pcht.po_hcts',
                                    'order_pcht.rencet',
                                    'order_pcht.hcs_verif',
                                    'order_pcht.hcts_verif',
                                    'hcts_pcht.blobor',
                                    'hcts_pcht.blanko',
                                    'hcts_pcht.blur',
                                    'hcts_pcht.botak',
                                    'hcts_pcht.diecut',
                                    'hcts_pcht.gradasi',
                                    'hcts_pcht.hologram',
                                    'hcts_pcht.miss_reg',
                                    'hcts_pcht.minyak',
                                    'hcts_pcht.noda',
                                    'hcts_pcht.plooi',
                                    'hcts_pcht.sobek',
                                    'hcts_pcht.tercampur',
                                    'hcts_pcht.terpotong',
                                    'hcts_pcht.tipis',
                                    'hcts_pcht.keterangan',
                                    'hcts_pcht.petugas1',
                                    'hcts_pcht.petugas2',
                                    'order_pcht.mesin',
                                    );
        }
        else
        {
            $dataExcel = QcPikai::query()
                            ->select('np_user','nama_user','tgl_verif','jml_verif','jml_obc','target','lembur','keterangan','jenis','validation');
        }

        return $dataExcel ;
    }
}
