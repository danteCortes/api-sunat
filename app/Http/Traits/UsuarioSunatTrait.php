<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsuarioSunat;

trait UsuarioSunatTrait{
    
    public static function guardar(array $request){

        if(strlen($request['ruc']) == 11){

            $usuario_sunat = new UsuarioSunat;
            $usuario_sunat->ruc = $request['ruc'];
            $usuario_sunat->razon_social = $request['razon_social'];
            $usuario_sunat->estado = $request['estado'];
            $usuario_sunat->condicion_domicilio = $request['condicion_domicilio'];
            $usuario_sunat->ubigeo = $request['ubigeo'];
            if($request['tipo_via'] != '' && substr($request['tipo_via'], 0, 1) != '-'){
                $usuario_sunat->tipo_via = $request['tipo_via'];
            }else{
                $usuario_sunat->tipo_via = '-';
            }
            if($request['nombre_via'] != '' && substr($request['nombre_via'], 0, 1) != '-'){
                $usuario_sunat->nombre_via = $request['nombre_via'];
            }else{
                $usuario_sunat->nombre_via = '-';
            }
            if($request['zona'] != '' && substr($request['zona'], 0, 1) != '-'){
                $usuario_sunat->zona = $request['zona'];
            }else{
                $usuario_sunat->zona = '-';
            }
            if($request['tipo_zona'] != '' && substr($request['tipo_zona'], 0, 1) != '-'){
                $usuario_sunat->tipo_zona = $request['tipo_zona'];
            }else{
                $usuario_sunat->tipo_zona = '-';
            }
            if($request['numero'] != '' && substr($request['numero'], 0, 1) != '-'){
                $usuario_sunat->numero = $request['numero'];
            }else{
                $usuario_sunat->numero = '-';
            }
            if($request['interior'] != '' && substr($request['interior'], 0, 1) != '-'){
                $usuario_sunat->interior = $request['interior'];
            }else{
                $usuario_sunat->interior = '-';
            }
            if($request['lote'] != '' && substr($request['lote'], 0, 1) != '-'){
                $usuario_sunat->lote = $request['lote'];
            }else{
                $usuario_sunat->lote = '-';
            }
            if($request['departamento'] != '' && substr($request['departamento'], 0, 1) != '-'){
                $usuario_sunat->departamento = $request['departamento'];
            }else{
                $usuario_sunat->departamento = '-';
            }
            if($request['manzana'] != '' && substr($request['manzana'], 0, 1) != '-'){
                $usuario_sunat->manzana = $request['manzana'];
            }else{
                $usuario_sunat->manzana = '-';
            }
            if($request['kilometro'] != '' && substr($request['kilometro'], 0, 1) != '-'){
                $usuario_sunat->kilometro = $request['kilometro'];
            }else{
                $usuario_sunat->kilometro = '-';
            }
            $usuario_sunat->save();
            return response(['estado'=>'ok', 'mensaje'=>'Usuario sunat registrado correctamente'], 400);
        }else{
            return response(['estado'=>'error', 'mensaje'=>'Hubo un problema interno.'], 422);
        }
    }
}
