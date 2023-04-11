<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoProveedores extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'id_proveedor',
        'sku_proveedor',
    ];
}
