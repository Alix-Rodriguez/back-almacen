<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    public $table = 'centro_costos';
    public $timestamps = false;
    use HasFactory;

    protected $filltable = [
        'id',
        'id_empresa',
        'id_cliente',
        'id_marca',
        'id_ubicacion_elsea',
        'descripcion'
    ];

}
