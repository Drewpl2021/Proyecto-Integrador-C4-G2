<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dashboard
        Permission::create([
            'name'=>'Ver dashboard'
        ]);
        //Supervisor
        Permission::create([
            'name'=>'Listar estudiantes'
        ]);
        Permission::create([
            'name'=>'Crear estudiantes'
        ]);
        Permission::create([
            'name'=>'Editar estudiantes'
        ]);
        Permission::create([
            'name'=>'Eliminar estudiantes'
        ]);
        //Estudiante
        Permission::create([
            'name'=>'Listar empresas'
        ]);
        Permission::create([
            'name'=>'Solicitar carta'
        ]);
        Permission::create([
            'name'=>'Subir Documentos'
        ]);
        Permission::create([
            'name'=>'Eliminar documentos'
        ]);



        Permission::create([
            'name'=>'Inscribirse Induccion'
        ]);
        Permission::create([
            'name'=>'Gestionar Induccion'
        ]);
        Permission::create([
            'name'=>'Gestionar Sedes'
        ]);
        Permission::create([
            'name'=>'Subir Sedes'
        ]);
        Permission::create([
            'name'=>'Carta Presentacion'
        ]);
        Permission::create([
            'name'=>'Recibir Carta Presentacion'
        ]);
        //Pastorino
        Permission::create([
            'name'=>'Descargar Documentos'
        ]);
        Permission::create([
            'name'=>'Ver documentos'
        ]);
        Permission::create([
            'name'=>'Eliminar Archivo Evaluador'
        ]);
        Permission::create([
            'name'=>'Subir Archivo Evaluador'
        ]);
        Permission::create([
            'name'=>'Ver induccion'
        ]);

        //Chisho
        Permission::create([
            'name'=>'Gestionar Convocatoria'
        ]);
        Permission::create([
            'name'=>'Inscribirse Convocatoria'
        ]);
        Permission::create([
            'name'=>'Gestionar Visitas'
        ]);

    }
}
