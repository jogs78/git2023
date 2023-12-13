<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\CasaController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\TerrenoController;
use App\Models\Carro;
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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('entrar',[PuertaController::class,"entrar"])->name('login');
Route::post('revisar',[PuertaController::class, "revisar"])->name('revisar');
Route::get('salir',[PuertaController::class,"salir"])->name('salir'); 

Route::get('instalar-o',[PuertaController::class,"instalarO"])->name('instalrO');

/*
//CREATE
Route::get('carros-nuevo',[CarroController::class,"formularioNuevo"])->name('carros-nuevo');
Route::post('carros-guardar',[CarroController::class, "guardar"])->name('carros-guardar');
//READ all
Route::get('carros',[CarroController::class,"leerTodos"])->name('carros-Todos');
//READ one
Route::get('carros\{cual}',[CarroController::class,"leerUno"])->name('carros-Uno');
//UPDATE
Route::get('carros-modificar\{cual}',[CarroController::class,"formularioModificar"])->name('carros-modificar');
Route::post('carros-actualizar\{cual}',[CarroController::class, "actualizar"])->name('carros-actualizar');
//DELETE
Route::delete('carros-borrar\{cual}',[CarroController::class, "borrar"])->name('carros-borrar');
*/

Route::resource('terrenos',TerrenoController::class)->middleware('auth');
Route::resource('casas', CasaController::class);



