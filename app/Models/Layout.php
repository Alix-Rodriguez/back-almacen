<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    public $table = 'layouts';
    protected $filltable = [
        'id_zona',
        'id_rack',
        'id_nivel',
        'id_localidad'
    ];
}
