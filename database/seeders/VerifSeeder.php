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
                    "nama_user"   => $data['2'],
                    "tgl_verif"  => $data['3'],
                    "jml_verif"  => $data['5'],
                    "jml_obc"    => $data['6'],
                    "target"     => $data['7'],
                    "lembur"     => $data['8'],
                    "keterangan" => $data['9'],
                    "id_station" => $data['10'],
                    "jenis"      => $data['11'],
                    "validation" => $data['12'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
