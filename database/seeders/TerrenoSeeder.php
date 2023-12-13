<?php

namespace Database\Seeders;

use App\Models\Terreno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerrenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $nueva = new Terreno();
        $nueva->direccion = "Carretera Panamericana";
        $nueva->servicio = 1;
        $nueva->save();

        $nueva = new Terreno();
        $nueva->direccion = "Carretera Angostura";
        $nueva->servicio = 2;
        $nueva->precio = 2000;
        $nueva->save();


    }
}
