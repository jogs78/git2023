<?php

use App\Http\Controllers\ImpuestoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
function vender(){
    echo "cuandos boletos quiere?";
}
function (){
    echo "cuandos boletos quiere?";
}
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('conciertos/boletos/ventas',function (){
    $pagina = <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        cuantos boletos quiere:
        <input type="numeber" >
        <button>comprar</button>
    </body>
    </html>
    EOT;
    echo "$pagina";
});

Route::get('boletos/cancelar', function (){
    $boletos = [203,206,210];
    return view("cancelar");
});
Route::get('boletos/cambiar', function (){
    $boletos = [203,206,210];
    return view("cambiar")->with("boletos",$boletos);
});
Route::get('boletos/revender', function (){
    $boletos = [203,206,210];
    return view("revender" , compact('boletos'));
});

Route::get('carros/pagar-refrendos/',function (){
    $placas = ['XYZ-203','XYZ-206','XYZ-210'];
    return view("carros.refrendos" , compact('placas'));
});
Route::get('carros/pagar-recargos/',function (){
    $placas = ['XYZ-203','XYZ-206','XYZ-210'];
    return view("carros.recargos" , compact('placas'));
});

Route::get('terrenos/pagar-impuestos/',[ImpuestoController::class , "pagarImpuestos" ]);
Route::get('terrenos/pagar-recargos/',[ImpuestoController::class , "pagarRecargos" ]);

