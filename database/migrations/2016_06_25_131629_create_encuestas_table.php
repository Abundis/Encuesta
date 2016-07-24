<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id_encuesta');

            $table->string('usuario',20);
            $table->foreign('usuario')->references('usuario')->on('users')->onDelete('cascade');
            
            $table->integer('id_preferencia')->unsigned();
            $table->foreign('id_preferencia')->references('id_preferencia')->on('preferencias')->onDelete('cascade');
            
            $table->string('nombre_encuesta',100);
            $table->string('descripcion',500);
            $table->date('fecha');
            $table->decimal('dinero',5,0);
            $table->decimal('tot_preguntas',2,0);
            $table->string('url',200);
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
        Schema::drop('encuestas');
    }
}
