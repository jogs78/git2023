<?php

use App\Http\Controllers\CarroController;
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

Route::get('carros',[CarroController::class,"leerTodos"])->name('carros-Todos');
Route::get('carros-nuevo',[CarroController::class,"formularioNuevo"])->name('carros-nuevo');
Route::post('carros-guardar',[CarroController::class, "guardar"])->name('carros-guardar');
