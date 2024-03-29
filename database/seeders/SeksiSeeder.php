<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seksi;

class SeksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvFile = fopen(base_path("database/csv/seksi.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Seksi::create([
                    "id_divisi"   => $data['1'],
                    "seksi"       => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
