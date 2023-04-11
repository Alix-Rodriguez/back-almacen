<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'fecha_descontinuado',
        'numero_caducida',
        'etiqueta_salida',
        'id_umedida',
        'peso',
    ];

}
