<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

  public function ingresar(Request $request){
    if (Auth::attempt(['persona_dni' => $request->dni, 'password' => $request->password])) {
      return response(["estado"=>"ingresó"]);
    }else{
      return response(["estado"=>"error"], 422);
    }
  }

}
