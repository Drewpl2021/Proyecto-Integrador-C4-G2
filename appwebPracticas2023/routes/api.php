<?php

use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\SedeController;
use App\Models\Contratoempresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/sedes',[SedeController::class,'index']);
Route::post('/sedes',[SedeController::class,'store']);
Route::put('/sedes/{Sede}',[SedeController::class,'update']);
Route::delete('/sedes/{Sede}',[SedeController::class,'destroy']);
Route::get('/sedes/{Sede}',[SedeController::class,'show']);

Route::get('/contratos',[Contratoempresa::class,'index']);
Route::post('/contratos',[Contratoempresa::class,'store']);
Route::put('/contratos/{Contratoempresa}',[Contratoempresa::class,'update']);
Route::delete('/contratos/{Contratoempresa}',[Contratoempresa::class,'destroy']);
Route::get('/contratos/{Contratoempresa}',[Contratoempresa::class,'show']);


Route::get('/convocatorias',[ConvocatoriaController::class,'index']);
Route::post('/convocatorias',[ConvocatoriaController::class,'store']);
Route::put('/convocatorias/{Convocatoria}',[ConvocatoriaController::class,'update']);
Route::delete('/convocatorias/{Convocatoria}',[ConvocatoriaController::class,'destroy']);
Route::get('/convocatorias/{Convocatoria}',[ConvocatoriaController::class,'show']);
    