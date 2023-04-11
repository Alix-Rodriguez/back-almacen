<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSustituto extends Model
{
    use HasFactory;

    protected $filltable = [ 
        'sku',
        'consecutivo',
        'sku_sustituto',
    ];
}
