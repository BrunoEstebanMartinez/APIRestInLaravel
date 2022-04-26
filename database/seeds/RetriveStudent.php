<?php

use Illuminate\Database\Seeder;

class RetriveStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students_view')->insert([
            'matricula' => '2134VH',
            'Apellido_P' => 'Martinez',
            'Apellido_M' => 'Millan',
            'Nombres' => 'Bruno',
            'ViEscuela' => 'BM100',
            'NuEscuela' => 'FE200',
            'NoMateriasAñoActual' => '2',
            'NoMateriasAñoPasado' => '1',
            'MateriaActual' => 'Mantenimiento',
            'Aula' => 'A1',
            'ExamenTD' => '1hm',
            'ExamenRet' => '1sm',
            'PuntuacionMen' => '100',
            'PuntuacionAnu' => '500',
        ]);

        DB::table('students_view')->insert([
            'matricula' => '2135VH',
            'Apellido_P' => 'Martinez',
            'Apellido_M' => 'Millan',
            'Nombres' => 'Hugo',
            'ViEscuela' => 'BM100',
            'NuEscuela' => 'FE200',
            'NoMateriasAñoActual' => '2',
            'NoMateriasAñoPasado' => '1',
            'MateriaActual' => 'Mantenimiento',
            'Aula' => 'A2',
            'ExamenTD' => '2hm',
            'ExamenRet' => '2sm',
            'PuntuacionMen' => '400',
            'PuntuacionAnu' => '1600',
        ]);
    }
}
