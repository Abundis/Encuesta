<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Pref_Cliente extends Model
{
    protected $table = "pref-clientes";
    protected $primaryKey = (['id_cliente','id_preferencia']);
}