<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash ;

class opportunitésFactory extends Factory
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
                'montant'=>$this->faker->numberBetween(),
                'etape'=>$this->faker->word(),
                'date_de_cloture'=>$this->faker->date(),
                'client'=>$this->faker->numberBetween(),
                'produits'=>$this->faker->word(),
                
        ];
    }
}
