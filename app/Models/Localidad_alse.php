<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad_alse extends Model
{
    public $table = 'localidad_alse';
    use HasFactory;
    
    protected $filltable = [
        'id',
        'descripcion'
    ];
    public $timestamps = false;

}
