<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_view', function (Blueprint $table) {
            $table->BigIncrements('id_student')->unique();
            $table->string('matricula')->unique();
            $table->string('Apellido_P');
            $table->string('Apellido_M');
            $table->string('Nombres');
            $table->string('ViEscuela');
            $table->string('NuEscuela');
            $table->string('NoMateriasAñoActual');
            $table->string('NoMateriasAñoPasado');
            $table->string('MateriaActual')->nullable();
            $table->string('Aula')->nullable();
            $table->string('ExamenTD')->nullable();
            $table->string('ExamenRet')->nullable();
            $table->string('PuntuacionMen')->nullable();
            $table->string('PuntuacionAnu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_view');
    }
}
