<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    public $table = 'rutas';
    public $timestamps = false;
    use HasFactory;

    protected $filltable = [
        'id',
        'nombre_ruta',
        'empresa',
        'almacen',
        'codigo_postal_inicio',
        'codigo_postal_fin'
    ];
}
