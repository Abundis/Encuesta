<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->integer('id_encuesta')->unsigned();
            $table->foreign('id_encuesta')->references('id_encuesta')->on('encuestas')->onDelete('cascade');

            $table->integer('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preg-encuestas')->onDelete('cascade');

            $table->integer('id_respuesta')->unsigned();
            $table->foreign('id_respuesta')->references('id_respuesta')->on('banco-respuestas')->onDelete('cascade');
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
        Schema::drop('respuestas');
    }
}
