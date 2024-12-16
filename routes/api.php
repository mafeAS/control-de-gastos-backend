<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user',function(Request $request){
        return $request->user(); //retorna la informacion del usuario autenticado
    });
});


Route::post('/registro',[AuthController::class, 'crearUsuario']);
Route::post('/login',[AuthController::class, 'login']);