<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $filltable = [
            'descuento_almacen',
            'tipo',
            'picking',
            'etiqueta_entrada',
            'usa_zona',
            'usa_rack',
            'usa_nivel',
            'usa_localidad',
            'schedule',
            'status',
            'contacto',
            'calle',
            'numero_extension',
            'numero_interno',
            'colonia',
            'cp',
            'delegacion_municipio',
            'telefono',
            'email',
            'usar_ubicacion',
            'folio_ubicacion',
            'zona_qa',
            'rack_qa',
            'nivel_qa',
            'localidad_qa',
    ];

    public $timestamps = false;
}
