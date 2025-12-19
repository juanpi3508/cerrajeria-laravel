<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = [
        'cliente_nombre',
        'telefono',
        'direccion',
        'tipo_servicio',
        'estado'
    ];

    const ESTADOS = [
        'pendiente',
        'en_camino',
        'completado',
        'cobrado'
    ];
}
