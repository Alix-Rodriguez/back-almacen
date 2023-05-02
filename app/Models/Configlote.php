<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configlote extends Model
{
    public $table = 'configs_lote';
    public $timestamps = false;


    use HasFactory;

    private $filltable = [
        'id',
        'descripcion'
    ];


}
