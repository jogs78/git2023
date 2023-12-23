<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CasaApiController;
use App\Http\Controllers\TerrenoApiController;
use App\Http\Controllers\PuertaApiController;

use App\Models\Terreno;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('casas',CasaApiController::class)->middleware('conToken');
Route::apiResource('terrenos',TerrenoApiController::class);

Route::post('revisar',[PuertaApiController::class, "revisar"]);
