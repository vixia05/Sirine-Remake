<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryDefect;

class CategoryDefectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/csv/jenis_kerusakan.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                CategoryDefect::create([
                    "category"     => $data['1'],
                    "sub_category" => $data['2'],
                    "system_alias" => $data['3'],
                    "workplace_alias" => $data['4'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
