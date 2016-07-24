<?php

namespace Encuesta;

use Illuminate\Database\Eloquent\Model;

class Preferencias extends Model
{
    protected $table = "preferencias";
    protected $primaryKey = "id_preferencia";

    protected $fillable = ['nombre','descripcion'];
}
