<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $nuevo = new Usuario();
        $nuevo->nombre_de_usuario = "juan";
        $nuevo->clave = bcrypt("asd");
        $nuevo->nombre_completo = "Juan Pérez";
        $nuevo->save();

        $nuevo = new Usuario();
        $nuevo->nombre_de_usuario = "rocio";
        $nuevo->clave = bcrypt("asd");
        $nuevo->nombre_completo = "Rocio López";
        $nuevo->save();

        $nuevo = new Usuario();
        $nuevo->nombre_de_usuario = "pedro";
        $nuevo->clave = bcrypt("asd");
        $nuevo->nombre_completo = "Pedro Gómez";
        $nuevo->tipo_de_usuario = "vendedor";
        $nuevo->save();

    }
}
