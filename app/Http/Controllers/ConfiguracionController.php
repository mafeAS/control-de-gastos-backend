<?php

namespace App\Http\Controllers;

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
}
