<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Privillage;

class PrivillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/csv/privillage.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Privillage::create([
                    "level"  => $data['1'],
                    "role"   => $data['2'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
