<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class produitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name(),
                'description'=>$this->faker->numberBetween(),
                'photo'=>$this->faker->word(),
                'prix'=>$this->faker->numberBetween(),
                'quantite'=>$this->faker->numberBetween()
                
        ];
    }
}
