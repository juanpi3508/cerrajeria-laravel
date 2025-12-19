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
        'estado',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public const TIPOS_SERVICIO = [
        'apertura_puerta',
        'cambio_cerradura',
        'duplicado_llaves',
        'reparacion_cerradura',
        'emergencia_24h',
    ];

    public const ESTADOS = [
        'pendiente',
        'en_camino',
        'completado',
        'cobrado',
        'inhabilitado'
    ];
}
