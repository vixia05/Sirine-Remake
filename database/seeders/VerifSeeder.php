<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QcPikai;

class VerifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvFile = fopen(base_path("database/csv/qc_pc.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                QcPikai::create([
                    "np_user"   => $data['1'],
                    "tgl_verif"  => $data['2'],
                    "jml_verif"  => $data['3'],
                    "jml_obc"    => $data['4'],
                    "target"     => $data['5'],
                    "lembur"     => $data['6'],
                    "keterangan" => $data['7'],
                    "validation" => $data['8'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
