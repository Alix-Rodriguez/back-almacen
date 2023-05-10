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
        'id_empresas',
        'sku',
        'descripcion',
        'modelo',
        'id_linea_producto',
        'id_marca',
        'serialisable',
        'caducidad',
        'sobresurtimiento',
        'serialisable_surtir',
        'requiere_inspeccion_calidad',
        'requiere_fecha_cadu',
        'numero_parte',
        'requiere_lote',
        'lote_compuesto',
        'id_config_lote',
        'id_unidad_de_medida',
        'peso',
        'fecha_descontinuo',
        'status',
        'kitting',
        'sku_proveedores'
    ];
    public $timestamps = false;

	
}
