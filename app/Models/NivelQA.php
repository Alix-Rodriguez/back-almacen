<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelQA extends Model
{
    use HasFactory;

    protected $filltable = [
        'id',
        'descripcion',
    ];
}
