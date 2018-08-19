<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Persona;
use App\Usuario;

class UsuarioController extends Controller{
  
  public function guardar(Request $request){
    $persona = new Persona;
    $persona->dni = $request->dni;
    $persona->nombres = $request->nombres;
    $persona->apellidos = $request->apellidos;
    $persona->save();

    $usuario = new Usuario;
    $usuario->persona_dni = $request->dni;
    $usuario->password = Hash::make($request->dni);
    $usuario->save();
    return $usuario;
  }
}
