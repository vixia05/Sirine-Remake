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
                    "id_seksi"  => $data['2'],
                    "id_unit"   => $data['3'],
                    "id_workstation"=> $data['4'],
                    "nama"      => $data['5'],
                    "contact"   => $data['6'],
                    "tgl_lahir" => $data['7'],
                    // "alamat"    => $data['9'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
