<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consorcio extends Model
{
    protected $table = 'consorcios';
	
    protected $fillable = ['nombre_consorcio', 'telefono', 'email', 'estado', 'imagen', 'user_id'];
  
    public function user()
    {
      return $this->belongsTo(User::class);
    }
  
    public function historialc()
    {
      return $this->hasMany(Historialc::class);
    }
}
