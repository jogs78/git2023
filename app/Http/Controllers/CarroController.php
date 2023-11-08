<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    //CRUD
    public function leerTodos (){
        $todos = Carro::all();
        return view('carro.listar',compact('todos'));
    }
    public function formularioNuevo(){
        return view('carro.nuevo');

    }
    public function guardar(Request $peticion){
        $nuevo = new Carro();
        $nuevo->placas = $peticion->input('placas');
        $nuevo->descripcion = $peticion->input('descripcion');
        $nuevo->precio = $peticion->input('precio');
        $nuevo->save();
        return redirect(route('carros-Todos'));


    }

}
