<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Andrés Montes Mamani',
            'email' => 'andres.montes@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'name' => 'Jerson Chambi',
            'email' => 'jerson.chambi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $user->assignRole('Supervisor');

        $user = User::create([
            'name' => 'Juan Perez',
            'email' => 'juan.perez@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $user->assignRole('Coordinador');

        $user = User::create([
            'name' => 'Alessandro Pastor Mamani Mamani',
            'email' => 'al@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $user->assignRole('Estudiante');

    }
}
