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
        'nombre_cliente',
        'nif',
        'calle',
        'colonia',
        'pais',
        'telefono',
        'telefono_opcional',
        'codigoPostal',
        'email',
        'contacto',
        'delegacion',
        'id_empresa',
        'telefono_opcional2',
        'numero_interior',
        'numero_exterior'
    ];
}
