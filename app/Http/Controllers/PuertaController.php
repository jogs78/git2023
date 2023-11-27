<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class PuertaController extends Controller
{
    public function entrar(){
        return view('puerta.formulario');

    }

    public function revisar(Request $request){
       echo "aqui revisaremos lo que llegue en el " . $request->input('nombre_de_usuario') . "<br>";
       $encontrado = Usuario::where('nombre_de_usuario',$request->input('nombre_de_usuario'))->first();
        if(is_null($encontrado)) {
            echo "no encontrado" . "<br>";
        }else{

            $calve_en_bd =$encontrado->clave;
            $clave_en_formulario = $request->input('clave');
            echo "revisemos la contraseña" . "<br>";

            if(Hash::check($clave_en_formulario,$calve_en_bd) ){
                echo "bien, las claves son iguales <br>";
                echo "ahora iniciaremos sesion <br>";
                Auth::login($encontrado);
                return redirect(route('casas.index'));

            }else{
                echo "error, las claves son diferentes <br>";
            }

/*
            if($calve_en_bd == $clave_en_formulario) {
                echo "las claves son iguales <br>";
            }else{
                echo "las claves son diferentes <br>";
            }
*/
        }
    }


    public function salir(){
        Auth::logout();

    }
}
