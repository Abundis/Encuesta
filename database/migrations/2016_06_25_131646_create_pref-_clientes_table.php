<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pref-clientes', function (Blueprint $table) {
            $table->string('id_cliente',15);
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');

            $table->integer('id_preferencia')->unsigned();
            $table->foreign('id_preferencia')->references('id_preferencia')->on('preferencias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pref-_clientes');
    }
}
