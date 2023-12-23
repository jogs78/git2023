<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    protected $fillable = ['direccion','codigo_postal','precio'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
