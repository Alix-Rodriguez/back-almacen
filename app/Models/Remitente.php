<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    public $table = 'remitentes';
    public $timestamps = false;
    use HasFactory;

    protected $filltable = [
        'id',
        'calle',
        'numero_interno',
        'numero_externo',
        'colonia',
        'delegacion',
        'codigo_postal',
        'telefono',
        'email',
        'rfc'
    ];
}
