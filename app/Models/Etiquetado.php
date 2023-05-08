<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquetado extends Model
{
    public $table = 'etiquetados';
    public $timestamps = false;
    use HasFactory;

    protected $filltable = [
        'id',
        'nombre',
        'archivo_img',
        'status',
        'sistema',
        'impresion'
    ];
}
