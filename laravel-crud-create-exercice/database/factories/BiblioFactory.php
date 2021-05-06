<?php

namespace Database\Factories;

use App\Models\Biblio;
use Illuminate\Database\Eloquent\Factories\Factory;

class BiblioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Biblio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name(),
            'adresse'=>$this->faker->address,
            'num'=>$this->faker->phoneNumber
        ];
    }
}
