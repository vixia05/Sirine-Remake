<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JamEfektif;

class JamEfektifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/csv/jam_efektif.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                JamEfektif::create([
                    "gilir"  => $data['1'],
                    "unit"   => $data['2'],
                    "group"  => $data['3'],
                    "jam_efektif"   => $data['4'],
                    "target_jam"   => $data['5'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
