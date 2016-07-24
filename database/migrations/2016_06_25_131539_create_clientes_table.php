<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('id_cliente',15)->unique();
            $table->string('nombre',32);
            $table->string('apellidos',50);
            $table->decimal('dinero',5,0)->nullable();
            $table->string('email',50)->unique();
            $table->string('password',32);
            $table->decimal('telefono',20,0)->nullable();
            $table->enum('genero',['M','F']);
            $table->string('calleynum',100);
            $table->string('estado',70);
            $table->string('ciudad',50);
            $table->rememberToken();
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
        Schema::drop('clientes');
    }
}
