<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mesin;

class MesinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/csv/mesin.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Mesin::create([
                    "kode_mesin" => $data['1'],
                    "mesin"      => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
