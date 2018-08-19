<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable{

  public $timestamps = false;

  public function persona(){
    return $this->belongsTo('App\Persona', 'persona_dni', 'dni');
  }
}
