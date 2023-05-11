<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionNocatalogado extends Model
{
    public $table = 'recepcion_nocatalogado';
    use HasFactory;

    protected $filltable = [
        'id',
        'id_almacen',
        'id_empresas'    
    ];
}
