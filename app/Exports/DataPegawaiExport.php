<?php

namespace App\Exports;

use App\Models\UserDetails;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataPegawaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserDetails::all();
    }
}
