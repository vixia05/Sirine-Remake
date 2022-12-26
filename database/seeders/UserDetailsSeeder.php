<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDetails;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDetails::truncate();

        $csvFile = fopen(base_path("database/csv/user_details.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                UserDetails::create([
                    "np_user"   => $data['1'],
                    "nama"      => $data['2'],
                    "email"     => $data['3'],
                    "tgl_lahir" => $data['4'],
                    "contact"   => $data['5'],
                    "alamat"    => $data['6'],
                    "foto"      => $data['7'],
                    "id_divisi" => $data['8'],
                    "id_seksi"  => $data['9'],
                    "id_unit"   => $data['10'],
                    "id_workstation" => $data['11'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
