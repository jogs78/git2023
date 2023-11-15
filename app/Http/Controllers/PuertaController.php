<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuertaController extends Controller
{
    public function entrar(){
        return view('puerta.formulario');

    }

    public function revisar(Request $request){
        echo "aqui revisaremos lo que llegue en el " . $request->input('usuario');
        
    }


    public function salir(){}

    //
}
