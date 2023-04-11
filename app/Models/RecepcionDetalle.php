<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionDetalle extends Model
{
    use HasFactory;

    protected $filltable = [
            'id_almacen',
            'fecha',
            'id_consecutivo',
            'sku',
            'cantidad_requerida',
            'cantidad_surtida',
            'fecha_elaboracion',
            'aduana',
            'pedimento',
            'fecha_aduana',
            'pais_origen',
            'id_ucarga',
            'cantidad_ucarga',
            'sku_sustitutivo',
            'precio',
            'lote',
            'fecha_caducidad',
            'num_lote',
            'id_tasacambio',
    ];
}
