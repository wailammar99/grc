<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class clientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'societe'=>$this->faker->word(),
            'telephone' => $this->faker->numberBetween(),
            'adresse' => $this->faker->address(),
            'site_web' => $this->faker->word(), 
        ];
    }
}
