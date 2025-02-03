<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfiguracionRequest;
use App\Models\ConfiguracionUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{
    

    public function verificarConfiguracion(){
        $user= Auth::user();
        
        $configuracion=ConfiguracionUsuario::where('user_id', $user->id)->first();


        return response()->json([
            'configuracion'=> $configuracion ? true :false
        ]);
    }


    public function crearConfiguracionUsuario(ConfiguracionRequest $request){

        $data= $request->validated();
        $configuracionUsuario=ConfiguracionUsuario::create([
            'user_id'=>Auth::user()->id,
            'sueldo'=>$data['sueldo'],
            'bonificacion'=>$data['bonificacion'],
            'moneda_id'=>$data['moneda_id'],
            'frecuencia_id'=>$data['frecuencia_id']
        ]);

        return ['configuracion_usuario'=>$configuracionUsuario];
    }   
}
