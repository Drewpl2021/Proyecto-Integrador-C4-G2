<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=Role::create(['name'=>'Administrador']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]);

        $role=Role::create(['name'=>'Coordinador']);
        $role->syncPermissions(['Listar estudiantes','Gestionar Induccion',
        'Gestionar Sedes','Carta Presentacion','Ver documentos', 'Gestionar Convocatoria','Gestionar Visitas']);

        $role=Role::create(['name'=>'Supervisor']);
        $role->syncPermissions(['Subir Archivo Evaluador', 'Eliminar Archivo Evaluador']);

        $role=Role::create(['name'=>'Estudiante']);
        $role->syncPermissions(['Listar empresas','Solicitar carta','Subir Documentos',
        'Eliminar documentos', 'Inscribirse Induccion', 'Subir Sedes','Recibir Carta Presentacion','Inscribirse Convocatoria']);
    }
}
