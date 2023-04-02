<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('fr_CA');
        return [
            'nom'               => $faker->name(),
            'addresse'          => $faker->address(),
            'telephone'         => $faker->phoneNumber(),
            'courriel'          => $faker->unique()->safeEmail(),
            'date_naissance'    => $faker->date(),
            'ville_id'          => Ville::inRandomOrder()->first()->id,
        ];
    }

}
