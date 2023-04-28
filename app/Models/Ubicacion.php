<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    public $table = 'ubicacion';
    use HasFactory;

    protected $filltable = [
        'id',
        'ubicacion'
    ];
    public $timestamps = false;
    
}
