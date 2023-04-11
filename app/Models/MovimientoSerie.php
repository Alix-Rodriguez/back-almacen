<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoSerie extends Model
{
    use HasFactory;

    protected $filltable = [
            'id_almacen',
            'sku',
            'fecha',
            'id_consecutivo',
            'reg_numero',
            'id_zona',
            'id_rack',
            'id_nivel',
            'id_localidad',
            'consecutivo',
            'num_serie',
            'apartado',
            'lote',
    ];
}
