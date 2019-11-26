<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'name', 'email', 'password','telefono','estado','tipouser_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function consorcio()
    {
      return $this->hasMany(Consorcio::class);
    }
  
    public function tipouser()
    {
      return $this->belongsTo(Tipouser::class);
    }
  
    public function puntiacion()
    {
      return $this->hasMany(Puntiacion::class);
    }
  
    public function afiliado()
    {
      return $this->hasMany(Afiliado::class);
    }
}
