<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipouser extends Model
{
    protected $table = 'tipousers';
    
    protected $fillable = ['descripcion'];
  
    public function user()
    {
      return $this->hasMany(User::class);
    }
}
