<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    //
    protected $table = 'afiliados';

    protected $fillable = ['nombre','apellido','telefono','dni','tipo_dni','pais_id', 'user_imagen_id', 'user_id','estado'];
  
    public function pais()
    {
      return $this->belongsTo(Pais::class);
    }
  
    public function user()
    {
      return $this->belongsTo(User::class);
    }
  
    public function alia()
    {
      return $this->hasMany(Alia::class);
    }
  
    public function historialc()
    {
      return $this->hasMany(Historialc::class);
    }
  
    public function puntiacion()
    {
      return $this->hasMany(Puntiacion::class);
    }
  
  
    public function user_imagen()
    {
      return $this->belongsTo(User_image::class,'user_imagen_id');
    }
}
