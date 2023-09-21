<?php

namespace Database\Factories;

use App\Models\aeroports;
use App\Models\compagnies;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_vol' => $this->faker->integer,
            'date_depart' => $this->faker->date(),
            'heure_depart' => $this->faker->integer,
            'date_arrive' => $this->faker->date(),
            'heure_arrive' => $this->faker->integer,
            'compagnie' => compagnies::factory()->create(),
            'aeroport-depart' => aeroports::factory()->create(),
            'aeroport_arrive' => aeroports::factory()->create()

        ];
    }
}
