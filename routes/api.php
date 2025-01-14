<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfiguracionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user',function(Request $request){
        return $request->user(); //retorna la informacion del usuario autenticado
    });

    Route::get('/configuracion', [ConfiguracionController::class, 'verificarConfiguracion']);

    Route::post('/logout',[AuthController::class,'logout']);
});


Route::post('/registro',[AuthController::class, 'crearUsuario']);
Route::post('/login',[AuthController::class, 'login']);