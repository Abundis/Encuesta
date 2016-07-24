<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco-preguntas', function (Blueprint $table) {
            $table->increments('id_pregunta');
            $table->string('pregunta',100);
            $table->integer('id_preferencia')->unsigned();
            $table->foreign('id_preferencia')->references('id_preferencia')->on('preferencias')->onDelete('cascade');
            $table->string('tipo',15);
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
        Schema::drop('banco-_preguntas');
    }
}
