<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable implements JWTSubject{

  use Notifiable;

  protected $fillable = [
      'persona_dni', 'password',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];

  public $timestamps = false;

  public function persona(){
    return $this->belongsTo('App\Persona', 'persona_dni', 'dni');
  }

  public function getJWTIdentifier(){
    return $this->getKey();
  }

  public function getJWTCustomClaims(){
    return [];
  }
}
