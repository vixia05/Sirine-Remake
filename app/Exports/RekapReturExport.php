<?php

namespace App\Exports;

use App\Models\RekapReturPikai;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RekapReturExport implements FromQuery, WithHeadings, ShouldAutoSize, WithStyles
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
            'NP',
            'Nama',
            'Tgl CK3',
            'Jenis',
            'Retur Blobor',
            'Retur Hologram',
            'Retur Miss_reg',
            'Retur Noda',
            'Retur Plooi',
            'Retur Blur',
            'Retur Gradasi',
            'Retur Terpotong',
            'Retur Tipis',
            'Retur Sobek',
            'Retur Botak',
            'Retur Tercampur',
            'Retur Diecut',
            'Total Retur'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {

        if($this->npUser !== null && $this->npUser != 0)
        {
            $dataExcel = RekapReturPikai::query()
                            ->where('np_user',$this->npUser)
                            ->select(
                                'np_user',
                                'nama_user',
                                'tgl_cek',
                                'jenis',
                                'blobor',
                                'hologram',
                                'miss_reg',
                                'noda',
                                'plooi',
                                'blur',
                                'gradasi',
                                'terpotong',
                                'tipis',
                                'sobek',
                                'botak',
                                'tercampur',
                                'diecut',
                                'jml_retur'
                            );
        }
        else
        {
            $dataExcel = RekapReturPikai::query()
                            ->select(
                                'np_user',
                                'nama_user',
                                'tgl_cek',
                                'jenis',
                                'blobor',
                                'hologram',
                                'miss_reg',
                                'noda',
                                'plooi',
                                'blur',
                                'gradasi',
                                'terpotong',
                                'tipis',
                                'sobek',
                                'botak',
                                'tercampur',
                                'diecut',
                                'jml_retur'
                            );
        }

        return $dataExcel ;
    }
}
