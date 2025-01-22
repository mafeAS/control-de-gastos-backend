<?php

namespace App\Http\Controllers;

use App\Http\Resources\FrecuenciaCollection;
use App\Models\Frecuencia;
use Illuminate\Http\Request;

class FrecuenciaController extends Controller
{
    public function index(){
        return new FrecuenciaCollection(Frecuencia::all());
    }
}
