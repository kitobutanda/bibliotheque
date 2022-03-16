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
        // etap 3 ici on apple les seedes 
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeders::class);
    }
}
