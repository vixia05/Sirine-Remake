<?php

namespace App\Exports;

use App\Models\Evaluasi;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RekapEvaluasiExport implements FromQuery, WithHeadings, WithStyles
{
    use Exportable;
    private $npUser;

    public function __construct($npUser)
    {
        $this->npUser = $npUser;
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
            'NP Kasek',
            'Nama Kasek',
            'NP Kaun',
            'Nama Kaun',
            'NP User',
            'Nama User',
            'Evaluasi Kasek',
            'Evaluasi Kaun',
            'Respon User',
            'Tanggal Evaluasi',
            'Tanggal Response',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {

        if($this->npUser !== null && $this->npUser != 0)
        {
            $dataExcel = Evaluasi::query()
                            ->where('np_user',$this->npUser)
                            ->select(
                                'np_kasek',
                                'nama_kasek',
                                'np_kaun',
                                'nama_kaun',
                                'np_user',
                                'nama_user',
                                'eva_kasek',
                                'eva_kaun',
                                'response',
                                'post_date',
                                'response_date'
                            );
        }
        else
        {
            $dataExcel = Evaluasi::query()
                            ->select(
                                'np_kasek',
                                'nama_kasek',
                                'np_kaun',
                                'nama_kaun',
                                'np_user',
                                'nama_user',
                                'eva_kasek',
                                'eva_kaun',
                                'response',
                                'post_date',
                                'response_date'
                            );
        }

        return $dataExcel ;
    }
}
