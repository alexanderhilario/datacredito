<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencias';

    protected $fillable = ['descripcion','puntos','tipo_incidencia']; 

    public function historialc()
    {
      return $this->hasMany(Historialc::class);
    }
}
