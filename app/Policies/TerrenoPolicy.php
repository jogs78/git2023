<?php

namespace App\Policies;

use App\Models\Terreno;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class TerrenoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Usuario $usuario): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Usuario $usuario, Terreno $terreno): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Usuario $usuario): bool
    {
        return $usuario->tipo_de_usuario == 'vendedor';
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Usuario $usuario, Terreno $terreno): bool
    {
        if($usuario->tipo_de_usuario == 'vendedor' ){
                return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Usuario $usuario, Terreno $terreno): bool
    {
        if($usuario->tipo_de_usuario == 'vendedor' ){
            if( is_null($terreno->precio) ) 
                return true;
            else 
                return false;
        } else {
            return false;
        }

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Usuario $usuario, Terreno $terreno): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Usuario $usuario, Terreno $terreno): bool
    {
        //
    }
}
