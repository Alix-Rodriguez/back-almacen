<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoProducto extends Model
{
    use HasFactory;
    public $table ='movimientos_productos';
    public $timestamps = false;

    protected $filltable = [
            'id',
            'sku',
/*             'unidad_medida'
 */    ];
}
