<?php

namespace Database\Seeders;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
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
        Batiment::factory(25)->create();
        Eleve::factory(25)->create();
        Formation::factory(25)->create();
    }
}
