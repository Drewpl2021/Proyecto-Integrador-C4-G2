<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InduccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'detalle' => $this->faker->text(100),
            'encargardo' => $this->faker->name(),
            'hora' => $this->faker->time(),
            'fecha' => $this->faker->date(),
            'zoom' => $this->faker->url(),
        ];
    }
}
