<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    use HasFactory;

    protected $filltable = [
            'id_almacen',
            'fecha',
            'id_consecutivo',
            'referencia',
            'id_proveedor',
            'status',
            'fecha_elaboracion',
            'usuario_elaboracion',
            'fecha_confirmada',
            'usuario_confirmada',
            'fecha_transito',
            'usuario_transito',
            'fecha_recibido',
            'usuario_recibido',
            'fecha_cerrado',
            'usuario_cerrado',
            'indicaciones',
            'observaciones',
            'tipo',
            'fecha_chaining',
            'id_chaining',
            'filler1',
            'filler2',
            'observaciones_almacen',
            'descripcion_transportista',
            'placa_transportista',
            'licencia_transportista',
            'conductor',
            'referencia_telmex',
            'es_compra_web',
            'id_centro_costo',
            'id_tipo_or',
    ];
}
