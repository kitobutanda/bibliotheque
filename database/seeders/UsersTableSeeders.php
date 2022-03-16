<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'noms'=>'kito',
            'username'=>'admin',
            'password'=>\bcrypt('1234'),
            
        ]);
        User::create([
            'noms'=>'judith',
            'username'=>'judith',
            'password'=>\bcrypt('1234'),
            
        ]);
    }
}
