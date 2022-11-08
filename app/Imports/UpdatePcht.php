<?php

namespace App\Imports;

use App\Models\OrderPcht;
use Maatwebsite\Excel\Concerns\ToModel;

class UpdatePcht implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OrderPcht([
            //
        ]);
    }
}
