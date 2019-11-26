<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alia extends Model
{
    protected $table = 'alias';

    protected $fillable = ['apodo','afiliado_id'];
  
    public function afiliado()
    {
      return $this->belongsTo(Afiliado::class);
    }
  
}
