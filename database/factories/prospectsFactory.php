<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class prospectsFactory extends Factory
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
            'nom'=>$this->faker->name(),
            'prenom'=>$this->faker->name(),
           
            'email'=>$this->faker->email(),
            'telephone' => $this->faker->numberBetween(),
            'adresse' => $this->faker->address(),
            'site_web' => $this->faker->word(),
            'source'=>$this->faker->text(), 
            'foction'=>$this->faker->word()
        ];
    }
}
