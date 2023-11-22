<?php

namespace Database\Seeders;

use App\Models\Casa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new Casa();
        $nueva->direccion = "Carretera Panamericana";
        $nueva->codigo_postal = 29000;
        $nueva->save();

        $nueva = new Casa();
        $nueva->direccion = "Carretera Angostura";
        $nueva->codigo_postal = 101010;
        $nueva->save();


    }
}
