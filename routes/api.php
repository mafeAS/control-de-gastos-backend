<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\FrecuenciaController;
use App\Http\Controllers\MonedaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){//Aqui el usuario tiene que estar autenticado para poder acceder a los datos, si esta por fuera se puede acceder a los datos
    Route::get('/user',function(Request $request){
        return $request->user(); //retorna la informacion del usuario autenticado
    });

    Route::get('/configuracion', [ConfiguracionController::class, 'verificarConfiguracion']);
    Route::post('/crearConfiguracion',[ConfiguracionController::class, 'crearConfiguracionUsuario']);
    Route::post('/logout',[AuthController::class,'logout']);
});


//datos en la cual no se requiere autenticación 
Route::apiResource('/frecuencia', FrecuenciaController::class);
Route::apiResource('/moneda', MonedaController::class);


//autenticacion
Route::post('/registro',[AuthController::class, 'crearUsuario']);
Route::post('/login',[AuthController::class, 'login']);