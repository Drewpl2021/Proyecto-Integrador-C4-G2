<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->numerify('##########'),
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'dni' => $this->faker->numerify('########'),
            'cycle' => $this->faker->randomElement(['6', '7', '8', '9', '10']),
            'school' => $this->faker->randomElement(['Ingenieria de Sistemas', 'Arquitectura', 'Ingenieria de Induscrias Alimentarias', 'Ingenieria Civil', 'Ingenieria Civil', 'Ingenieria Ambiental']),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Student $student) {
            $user = User::factory()->create([
                'name' => $student->name,
                'email' => $student->email,
                'password' => Hash::make('12345'),



            ]);
            $role = Role::where('name', 'estudiante')->first();
            $user->assignRole($role);
        });
    }
}
