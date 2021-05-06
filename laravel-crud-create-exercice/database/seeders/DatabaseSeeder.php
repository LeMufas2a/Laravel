<?php

namespace Database\Seeders;

use App\Models\Biblio;
use App\Models\Image;
use App\Models\Livre;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Biblio::factory(20)->create();
        Livre::factory(50)->create();
        Image::factory(30)->create();
    }
}
