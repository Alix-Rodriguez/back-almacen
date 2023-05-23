<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimiento_interno extends Model
{
    public $table = 'movimiento_internos';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id',
        'id_empresa',
        'id_almacen',
        'id_rack',
        'id_localidad',
        'id_nivel',
        'id_zona'
    ];
}
