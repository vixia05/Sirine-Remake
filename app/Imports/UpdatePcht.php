<?php

namespace App\Imports;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;

use Carbon\Carbon;

use App\Models\OrderPcht;
use App\Models\HctsPcht;

use \PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UpdatePcht implements ToCollection, WithHeadingRow
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
            // dd($row);
            orderPcht::updateOrCreate(
                ['no_obc' => $row['no_obc'], 'no_po' => (int)$row['no_po']],
                [
                'jenis'         => $row['perso_non_perso'],
                'seri'          => (int)$row['seri'],
                'tgl_obc'       => Date::excelToDatetimeObject($row['tgl_obc'])->format('Y-m-d'),
                'tgl_jt'        => Date::excelToDatetimeObject($row['tgl_jtempo'])->format('Y-m-d'),
                'tgl_bb'        => $row['tgl_pakai_bb'] == null ? null : Date::excelToDatetimeObject($row['tgl_pakai_bb'])->format('Y-m-d'),
                'tgl_cetak'     => $row['tgl_cetak']    == null ? null : Date::excelToDatetimeObject($row['tgl_cetak'])->format('Y-m-d'),
                'tgl_verif'     => $row['tgl_verifikasi'] == null ? null : Date::excelToDatetimeObject($row['tgl_verifikasi'])->format('Y-m-d'),
                'tgl_kemas'     => $row['tanggal_kemas']  == null ? null : Date::excelToDatetimeObject($row['tanggal_kemas'])->format('Y-m-d'),
                'jml_order'     => (int)$row['qty_pesan'],
                'rencet'        => (int)$row['rencet'],
                'jml_bb'        => (int)$row['jml_bb_lk'],
                'jml_cd'        => (int)$row['jlm_cd_lk'],
                'total_cd'      => (int)$row['total_bb_lk'],
                'jml_cetak'     => (int)$row['jml_cetak'],
                'hcs_verif'     => (int)$row['baik_verifikasi'],
                'hcts_verif'    => (int)$row['rusak_verifikasi'],
                'hcs_sisa'      => (int)$row['hasil_baik_dijadikan_hcts'],
                'total_hcts'    => (int)$row['total_hcts'],
                'kemas'         => (int)$row['kemas'],
                'kirim'         => (int)$row['kirim'],
                'mesin'         => $row['work_center'],
            ]);
        }

        OrderPcht::whereMonth('tgl_verif',today())
                        ->where('tgl_verif','!=',null)
                        ->get()
                        ->map(function($data){
                            HctsPcht::firstOrCreate(
                                [
                                    'no_po' => $data->no_po
                                ],
                                [
                                    'petugas1' => 7443,
                                    'tgl_periksa' => $data->tgl_verif
                                ]
                                );
                        });

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
