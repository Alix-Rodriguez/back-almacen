<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    public $table = 'orden_compras';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id',
        'referencia',
        'id_proveedor',
        'fecha',
        'id_centro_costo',
        'id_tipo_orden',
        'id_tipo_orden'
        'central',
        'indicaciones',
        'observaciones'
    ];
}
