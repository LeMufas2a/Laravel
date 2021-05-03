<?php

namespace Database\Factories;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PersonneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personne::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genre = ["Homme", 'Femme'];
        return [
            'name'=>$this->faker->firstName, 
            'prenom'=>$this->faker->lastName,
            'age' => random_int(0, 100),
            'ddn' => $this->faker->date('Y-m-d', 'now'),
            'genre' => Arr::random($genre)

        ];
    }
}
