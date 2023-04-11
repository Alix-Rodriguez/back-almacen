<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoUbicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'id_almacen',
        'zona',
        'rack',
        'nivel',
        'localidad',
        'capacidad',
    ];
    
    
}
