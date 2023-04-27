<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $table = 'proveedores';
    use HasFactory;

    protected $filltable = [
        'id',
        'empresa',
        'nombre_proveedor',
        'rfn',
        'codigo_postal',
        'calle',
        'telefono1',
        'telefono2',
        'telefono3',
        'numero_exterior',        
        'numero_interior',
        'pais',
        'colonia',
        'delegacion',
        'contacto',
        'email'
    ];
    public $timestamps = false;
}
