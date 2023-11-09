<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    //Por llamase Carro en PascalCase busca una tabla que se llame carros (snake_case del nombre y en plural)
    protected $table="vehiculos";

    //El modelo busca en la tabla que el campo clave se llame ID
    protected $primaryKey = 'placas';
    public $incrementing = false;
    protected $keyType = 'string';

    //El modelo busca los compos cretated_at y updated_at para poner la hora y fecha de creacion y de modificacion
    public $timestamps = false;
}
