<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table = "respuestas";
    protected $primaryKey = (['id_pregunta','id_encuesta','id_respuesta']);
}
