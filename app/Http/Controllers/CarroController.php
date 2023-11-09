<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    //Create Read Update Delete son las acciones que se realizan sobre una base de datos
    
    //READ all
    public function leerTodos (){
        $todos = Carro::all();
        return view('carro.listar',compact('todos'));
    }
    //READ One
    public function leerUno ($cual){
        $seleccionado = Carro::find($cual);
        return view('carro.mostrar' , compact('seleccionado'));

    }

//Las dos acciones siguientes me sirven para CREATE
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
//Las dos acciones siguientes me sirven para UPDATE
    public function formularioModificar($cual){
        $seleccionado = Carro::find($cual);
        return view('carro.modificar' , compact('seleccionado'));
    }
    public function actualizar(Request $peticion, $cual){
        $encontrado = Carro::find($cual);
        $encontrado->placas = $peticion->input('placas');
        $encontrado->descripcion = $peticion->input('descripcion');
        $encontrado->precio = $peticion->input('precio');
        $encontrado->save();
        return redirect(route('carros-Todos'));
    }
    public function borrar(Request $peticion, $cual){
        $encontrado = Carro::find($cual);
        $encontrado->delete();
        return redirect(route('carros-Todos'));
    }

}
