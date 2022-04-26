<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students_view';
    protected $fillable = ['matricula', 'Apellido_P',
    'Apellido_M',
    'Nombres',
    'ViEscuela',
    'NuEscuela',
    'NoMateriasAñoActual',
    'NoMateriasAñoPasado',
    'MateriaActual',
    'Aula',
    'ExamenTD',
    'ExamenRet',
    'PuntuacionMen',
    'PuntuacionAnu'];
    protected $primaryKey = "id_student";

}
