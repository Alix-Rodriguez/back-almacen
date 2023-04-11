<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmacenRemitente extends Model
{
    use HasFactory;

    protected $filltable = [
        'contacto',
        'calle',
        'numero_extension',
        'numero_interno',
        'colonia',
        'cp',
        'delegacion_municipio',
        'telefono',
        'email',
        'rfc',
    ];
}
