<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $yesOrNot = ['oui','non'];
        return [
            'titre'=>$this->faker->firstName,
            'auteur'=>$this->faker->lastName,
            'dateDePub'=>$this->faker->date('Y-m-d', 'now'),
            'ndpages'=>random_int(0,100),
            'vMobile'=>  Arr::random($yesOrNot)
        ];
    }
}
