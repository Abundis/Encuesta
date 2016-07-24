<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Banco_Preguntas extends Model
{
    protected $table = "banco-preguntas";
    protected $primaryKey = "id_pregunta";

    protected $fillable = ['pregunta','id_preferencia','tipo'];

    public function preferencias()
    {
        return $this->hasOne('Encuesta\Preferencias', 'foreign_key', 'nombre');
    }
}
