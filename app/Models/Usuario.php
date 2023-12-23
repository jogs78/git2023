<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable
{
    use HasFactory;
    protected $fillable=[
        "nombre_de_usuario",
        "clave",
        "nombre_completo",
        "tipo_de_usuario",
        "token",                
    ];
    protected $hidden = [
        'clave',
        'created_at',
        'updated_at',
    ];

}
