<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvFile = fopen(base_path("database/csv/unit.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Unit::create([
                    "unit"   => $data['1'],
                    "id_seksi"   => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
