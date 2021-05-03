<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleve::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $natio = ['Belge', 'Pas Belge'];
        return [
            'name'=>$this->faker->firstName,
            'prenom'=>$this->faker->lastName,
            'age'=>random_int(18,25),
            'ddn'=>$this->faker->date('Y-m-d', 'now'),
            'nationalité' => Arr::random($natio)
        ];
    }
}
