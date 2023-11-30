<?php

namespace App\Policies;

use App\Models\Usuario;
use App\Models\Casa;

use Illuminate\Auth\Access\Response;

class CasaPolicy
{
    public function create(Usuario $usuario): bool
    {
        if( $usuario->tipo_de_usuario == 'vendedor')
            return true;
        else   
            return false;
        //
    }

    public function delete(Usuario $usuario, Casa $casa): bool
    {
        if($usuario->tipo_de_usuario == 'vendedor' ){
            if( is_null($casa->precio) ) 
                return true;
            else 
                return false;
        } else {
            return false;
        }

    }

}