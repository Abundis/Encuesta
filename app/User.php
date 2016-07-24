<?php

namespace Encuesta;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = "usuario";

    public $incrementing = false;

    protected $fillable = ['usuario', 'nombre', 'apellidos', 'email', 'password', 'tipo'];
}
