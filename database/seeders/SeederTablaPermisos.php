<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usurio',

            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            'ver-denuncia',
            'crear-denuncia',
            'editar-denuncia',
            'borrar-denuncia',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
