<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Http\Traits\UsuarioSunatTrait;
use App\UsuarioSunat;

class UsuarioSunatController extends Controller{
  
  public function subirPadron(Request $request){
    mb_internal_encoding();

    $padron = fopen($request->padron, 'r');
    while(!feof($padron)){
      $usuario_sunat = [];
      $linea = fgets($padron);
      $linea = array_map('trim', explode('|', $linea));

      $usuario_sunat = [
        'ruc'                 => $linea[0],
        'razon_social'        => $linea[1],
        'estado'              => $linea[2],
        'condicion_domicilio' => $linea[3],
        'ubigeo'              => $linea[4],
        'tipo_via'            => $linea[5],
        'nombre_via'          => $linea[6],
        'zona'                => $linea[7],
        'tipo_zona'           => $linea[8],
        'numero'              => $linea[9],
        'interior'            => $linea[10],
        'lote'                => $linea[11],
        'departamento'        => $linea[12],
        'manzana'             => $linea[13],
        'kilometro'           => $linea[14]
      ];

      if(!UsuarioSunat::where('ruc', $usuario_sunat['ruc'])->first()){

        $respuesta = UsuarioSunatTrait::guardar($usuario_sunat);
      }      
    }

    return "usuarios registrados";
  }
}
