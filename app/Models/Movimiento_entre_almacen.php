<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento_entre_almacen extends Model
{
    public $table = 'movimiento_entre_almacens';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id',
        'id_almacen_origen',
        'id_almacen_destino',
        'id_empresa',
        'id_producto',
        'cantidad'

    ];
}
