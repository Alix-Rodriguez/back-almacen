<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    public $table = 'recepcions';
    use HasFactory;

    protected $filltable = [
        'id',
        'id_almacen',
        'id_empresas'    
    ];
}
