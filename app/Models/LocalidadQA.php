<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalidadQA extends Model
{
    use HasFactory;

    protected $filltable = [
        'id',
        'descripcion',
    ];
}