<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'edad',
        'cedula',
        'direccion',
        'telefono',
        'telefono_optional',
    ];

}
