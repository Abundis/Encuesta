<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preg-encuestas', function (Blueprint $table) {
            $table->integer('id_encuesta')->unsigned();
            $table->foreign('id_encuesta')->references('id_encuesta')->on('encuestas')->onDelete('cascade');

            $table->integer('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id_pregunta')->on('banco-preguntas')->onDelete('cascade');
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
        Schema::drop('preg-_encuestas');
    }
}
