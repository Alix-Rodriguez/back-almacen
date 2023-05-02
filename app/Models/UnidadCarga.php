<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UnidadCarga extends Model
{
    use HasFactory;

    public $table = 'unidad_carga';
    public $timestamps = false;

    protected $filltable = [
        'id',
        'descripcion_unidad_carga'
    ];
}
