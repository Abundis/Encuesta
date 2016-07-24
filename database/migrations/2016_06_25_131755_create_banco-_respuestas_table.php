<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco-respuestas', function (Blueprint $table) {
            $table->increments('id_respuesta');
            
            $table->integer('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id_pregunta')->on('banco-preguntas')->onDelete('cascade');
            
            $table->string('respuesta',100);
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
        Schema::drop('banco-_respuestas');
    }
}
