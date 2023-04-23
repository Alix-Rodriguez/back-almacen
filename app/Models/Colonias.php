<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    use HasFactory;

    protected $filltable = [
        'id',
        'code_delegacion',
        'descripcion',
        'code_colonia',
    ];

    public $timestamps = false;
}
