<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';
    use HasFactory;

    protected $filltable = [
        'id',
        'titulo',
        'sku',
        'id_proveedores',
        'descripcion',
        'modelo',
        'linea',
        'marca',
        'cantidad',
        'costo',
        'id_marca',
        'id_almacen',
        'serialisable',
        'caducidad',
        'sobresurtimiento',
        'status',
        'numero_parte',
        'qa',
        'serialisable_recepcion',
        'sku_compuesto',
        'lote_compuesto',
        'id_config_lote',
        'requiere_lote',
        'requiere_fecha_cadu',
        'id_linea',
        'codigo_barra'
    ];
    public $timestamps = false;
}
