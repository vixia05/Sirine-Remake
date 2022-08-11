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
        $this->call(SeksiSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(WorkstationSeeder::class);
        $this->call(UserDetailsSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
