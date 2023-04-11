<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nombre',
        'nif',
        'direccion',
        'pais',
        'ciudad',
        'telefono',
        'telefono_opcional',
        'contribuyente',
    ];
}
