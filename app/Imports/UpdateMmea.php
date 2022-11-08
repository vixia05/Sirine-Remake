<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\OrderMmea;
use Illuminate\Support\Collection;
use \PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UpdateMmea implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            orderMmea::updateOrCreate(
                ['no_obc' => $row['no_obc'], 'no_po' => (int)$row['order']],
                [
                'tgl_obc'       => Date::excelToDatetimeObject($row['tgl_obc'])->format('Y-m-d'),
                'tgl_jt'        => Date::excelToDatetimeObject($row['tgl_jtempo'])->format('Y-m-d'),
                'tgl_bb'        => Date::excelToDatetimeObject($row['tgl_pakai_bb'])->format('Y-m-d'),
                'tgl_cetak'     => Date::excelToDatetimeObject($row['tgl_cetak'])->format('Y-m-d'),
                'tgl_verif'     => Date::excelToDatetimeObject($row['tgl_verifikasi'])->format('Y-m-d'),
                'tgl_kemas'     => Date::excelToDatetimeObject($row['tanggal_kemas'])->format('Y-m-d'),
                'jml_order'     => (int)$row['qty_pesan'],
                'rencet'        => (int)$row['rencet'],
                'jml_bb'        => (int)$row['jml_bb_lk'],
                'jml_cd'        => (int)$row['jml_cd_lk'],
                'total_cd'      => (int)$row['total_bb_lk'],
                'jml_cetak'     => (int)$row['jml_cetak'],
                'hcs_verif'     => (int)$row['baik_verifikasi'],
                'hcts_verif'    => (int)$row['rusak_verifikasi'],
                'hcs_sisa'      => (int)$row['hasil_baik_dijadikan_hcts'],
                'total_hcts'    => (int)$row['total_hcts'],
                'kemas'         => (int)$row['kemas'],
                'kirim'         => (int)$row['kirim'],
                'status'        => $row['type'],
                'mesin'         => $row['work_center'],
            ]);
        }

        return redirect()->back();
    }


    /**
    * @return int
    */
   public function headingRow(): int
   {
       return 1;
   }
}
