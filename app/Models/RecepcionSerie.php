<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionSerie extends Model
{
    use HasFactory;

    protected $filltable =[
            'id_almacen',
            'fecha',
            'id_consecutivo',
            'sku',
            'id_zona',
            'id_rack',
            'id_nivel',
            'id_localidad',
            'consecutivo',
            'num_serie',
            'num_lote',
    ];
}
