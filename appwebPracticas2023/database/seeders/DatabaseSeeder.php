<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Induccion;
use App\Models\Sede;
use App\Models\student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        //Primero permisos y roles
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        //Usuario administrador
        $this->call(UserSeeder::class);
        Induccion::factory(10)->create();
        student::factory(50)->create();
        Sede::factory(20)->create();

    }
}
