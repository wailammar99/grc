<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash ;

class contactsFactory extends Factory
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
            'prenom' => $this->faker->name(),
            'foction' => $this->faker->word(),
            'email' => 'wailammar@live.com',
            'telephone'=>$this->faker->numberBetween(),
            'client' => $this->faker->name(),
            'password' => hash::make('123456'),
        ];
    }
}
