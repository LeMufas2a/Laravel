<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'Mufasa',
            'prenom' => 'Mohammed',
            'age' => '19',
            'email' => 'mufasa@gmail.com',
            'password' => 'LeMufasaa',
            'picture' => "trest"
        ]);
    }
}
