<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class rendezvousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->name(),
            'heure'=>$this->faker->numberBetween(),
            'compte_rendu'=>$this->faker->word(),
            'client'=>$this->faker->numberBetween()
        ];
    }
}
