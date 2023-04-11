<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $filltable = [
            'id_almacen',
            'SKU',
            'fecha',
            'id_consecutivo',
            'reg_numero',
            'tipo',
            'cantidad',
            'aduana',
            'pedimento',
            'fecha_aduana',
            'pais_origen',
            'lote',
            'referencia',
            'fecha_elaboracion',
            'etiqueta',
            'fecha_recepcion',
            'precio',
            'filler1',
            'filler2',
            'id_consecutivoRx',
    ];
}
