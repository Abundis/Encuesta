<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Cliente as Authenticatable;
//use Illuminate\Auth\Authenticatable;


class Cliente extends Authenticatable
{
	//use Authenticatable;
	
    protected $table = "clientes";
    protected $primaryKey = "id_cliente";

    public $incrementing = false;

    protected $fillable = ['id_cliente', 'nombre', 'apellidos', 'email', 'password', 'genero', 'ciudad', 'calleynum', 'estado', 'telefono'];
}
