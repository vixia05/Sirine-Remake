<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('users')->insert([
    //     'np' => 'I444', 'email' => 'zulfikar.h9050@gmail.com', 'password' => Hash::make('mail12345'),
    // ]);

    // User::delete();

        $csvFile = fopen(base_path("database/csv/users.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "np"   => $data['1'],
                    "email"   => $data['2'],
                    "password"   => hash::make($data['3']),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
