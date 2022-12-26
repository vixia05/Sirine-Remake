<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(LevelsSeeder::class);
        $this->call(PrivillageSeeder::class);
        $this->call(DivisiSeeder::class);
        $this->call(SeksiSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(WorkstationSeeder::class);
        $this->call(UserDetailsSeeder::class);
        // $this->call(VerifSeeder::class);
        $this->call(MesinSeeder::class);
        // $this->call(HctsPchtSeeder::class);
        // $this->call(HctsMmeaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(JamEfektifSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
