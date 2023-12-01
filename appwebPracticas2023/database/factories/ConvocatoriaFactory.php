<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoria>
 */
class ConvocatoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'fecha_pulicacion' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'requisitos' => $this->faker->text,
            'cupos' => $this->faker->randomNumber,
            'estado' => $this->faker->randomElement(['Activado', 'Desactivado']),
            'area_especialidad' => $this->faker->word,
            'remuneracion' => $this->faker->randomNumber,
            'sede_id' => \App\Models\Sede::factory(),
        ];
    }
}
