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
            "name" => "Elias"  ,
            "email" => "elias@molengeek.com",
            "password" => "eliaselias",
        ]);
        DB::table('users')->insert([
            "name" => "Antoine"  ,
            "email" => "antoine@molengeek.com",
            "password" => "monbgdu1050",
        ]);
        DB::table('users')->insert([
            "name" => "Mufasa"  ,
            "email" => "mufasa@molengeek.com",
            "password" => "mufasa789",
        ]);
    }
}
