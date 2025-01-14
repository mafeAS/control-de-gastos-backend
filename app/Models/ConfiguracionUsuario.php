<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionUsuario extends Model
{
    

    use HasFactory;
    protected $table='configuracion_usuario';

    protected $fillable=[
        'user_id',
        'sueldo',
        'bonificacion',
        'moneda_id',
        'frecuencia_id'
    ];
}
