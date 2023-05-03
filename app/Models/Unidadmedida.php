<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidadmedida extends Model
{
    public $table = 'unidad_medida';
    public $timestamps = false;
    use HasFactory;

    protected $filltable = [
        'id',
        'descripcion'
    ];
}