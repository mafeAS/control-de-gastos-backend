<?php

namespace App\Http\Controllers;

use App\Http\Resources\MonedaCollection;
use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    public function index(){
        return new MonedaCollection(Moneda::all());
    }
}
