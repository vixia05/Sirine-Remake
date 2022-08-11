<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workstation;

class WorkstationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvFile = fopen(base_path("database/csv/workstation.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Workstation::create([
                    "workstation"   => $data['1'],
                    "id_unit"       => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
