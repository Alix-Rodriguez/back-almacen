<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;

    protected $filltable = [
        'descripcion',
        'code_delegacion',
    ];

    public $timestamps = false;

}
