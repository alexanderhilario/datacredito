<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_image extends Model
{
     protected $table = 'user_images';
	  
	  protected $fillable = ['image'];
	  
	  public function afiliado()
	  {
	    return $this->hasMany(Afiliado::class,'user_imagen_id');
	  }
}
