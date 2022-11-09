<?php

namespace App\Exports;

use App\Models\QcPikai;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

class RekapVerifExport implements FromQuery
{
    use Exportable;
    private $npUser;

    public function __construct($npUser)
    {
        $this->npUser = $npUser;
    }

    public function headings(): array
    {
        return [
            "Nomor Pokok",
            "Nama",
            "Tanggal Verifikasi",
            "Jumlah Verifikasi",
            "Jumlah OBC",
            "Target Harian",
            "Lembur",
            "Keterangan",
            "Jenis",
            "Approval",
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {

        if($this->npUser !== null && $this->npUser != 0)
        {
            $dataExcel = QcPikai::query()
                            ->where('np_user',$this->npUser)
                            ->select('np_user','nama_user','tgl_verif','jml_verif','jml_obc','target','lembur','keterangan','jenis','validation');
        }
        else
        {
            $dataExcel = QcPikai::query()
                            ->select('np_user','nama_user','tgl_verif','jml_verif','jml_obc','target','lembur','keterangan','jenis','validation');
        }

        return $dataExcel ;
    }

}
