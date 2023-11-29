<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sede>
 */
class SedeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'razon_social' => $this->faker->company,
            'ruc' => $this->faker->unique()->numerify('###########'),
            'representante' => $this->faker->name,
            'trato' => $this->faker->title,
            'cargo' => $this->faker->jobTitle,
            'ubicacion' => $this->faker->address,
            'convenio' => $this->faker->randomElement(['si', 'no']),
            'estado' => $this->faker->randomElement(['Verificado', 'No_Verificado']),
        ];
    }
}
