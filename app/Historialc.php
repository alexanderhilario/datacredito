<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialc extends Model
{
    protected $table = 'historialcs';

    protected $fillable = ['afiliado_id', 'consorcio_id','nota','incidencia_id', 'puntuacion','fecha_entrada','fecha_salida'];
    
    public function afiliado()
    {
      return $this->belongsTo(Afiliado::class);
    }
  
    public function consorcio()
    {
      return $this->belongsTo(Consorcio::class);
    }
  
    public function incidencia()
    {
      return $this->belongsTo(Incidencia::class);
    }
}
