<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Preg_Encuesta extends Model
{
    protected $table = "preg-encuestas";
    protected $primaryKey = (['id_pregunta','id_encuesta']);
}
