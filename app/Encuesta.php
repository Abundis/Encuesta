<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = "encuestas";
    protected $primaryKey = "id_encuesta";

    protected $fillable = ['usuario','id_preferencia', 'nombre_encuesta', 'descripcion','dinero','tot_preguntas'];

    public function preferencias()
    {
        return $this->hasOne('Encuesta\Preferencias', 'foreign_key', 'nombre');
    }
}