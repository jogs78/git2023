<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;



class PuertaApiController extends Controller
{
    public function entrar(){
        return view('puerta.formulario');

    }

    public function revisar(Request $request){
        $usuario = $request->input('nombre_de_usuario');
//        Log::channel('sistema')->info("aqui revisaremos lo que llegue en el " . $usuario);
       $encontrado = Usuario::where('nombre_de_usuario',$usuario)->first();
        if(is_null($encontrado)) {            
            Log::channel('sistema')->warning(" intento de ($usuario) dese " . $request->ip());
            return response()->json('usuario o contraseña no encontrado',401);
        }else{
            $calve_en_bd =$encontrado->clave;
            $clave_en_formulario = $request->input('clave');
  //          Log::channel('sistema')->info ( "revisemos la contraseña");
            if(Hash::check($clave_en_formulario,$calve_en_bd) ){
                Log::channel('sistema')->info ( "Entro: " . $usuario);
//                Auth::login($encontrado);
//                auth()->setUser($encontrado);
                do {
                    try {
                        $token = Str::random();
                        $cuantos = $encontrado->update(['token' => $token] );
                    } catch (\Illuminate\Database\UniqueConstraintViolationException $th) {
                        $cuantos = false;
                    }
                } while (!$cuantos);
                $encontrado->expiracion = time()+(.5*60*60); //medio (0.5) de una hora (60 minutos * 60 segundos).
                $encontrado->save();

                return response()->json( $encontrado ,200);
                if($encontrado->tipo_de_usuario == 'vendedor')
                    return redirect(route('terrenos.index'));
                else
                    return redirect(route('casas.index'));
            }else{
                Log::channel('sistema')->error ( "Intento fallido para: " . $usuario);
                return response()->json('contraseña o usuario no encontrado',401);
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
        return redirect(route('login'));

    } 
    public function instalarO(){
       Artisan::call("db:wipe");
       Artisan::call("migrate",["--seed"=>true]);



    } 


}
