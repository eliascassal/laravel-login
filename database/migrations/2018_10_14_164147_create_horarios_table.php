<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('docente_id');
            $table->unsignedInteger('aula_id');
            $table->unsignedInteger('materia_id');
            $table->unsignedInteger('carrera_id');
            $table->integer('semestre');
            $table->time('hora_init');
            $table->time('hora_end');
            $table->index(['id', 'docente_id','materia_id']);

                $table->foreign('docente_id')->references('id')->on('docentes');
                $table->foreign('aula_id')->references('id')->on('aulas');
                $table->foreign('materia_id')->references('id')->on('materias');
                $table->foreign('carrera_id')->references('id')->on('carreras');

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
        Schema::dropIfExists('horarios');
    }
}
