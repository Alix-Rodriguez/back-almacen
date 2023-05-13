<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programaciondetalle extends Model
{
    public $table = 'programacion_detalle';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
            'id',
            'id_programacion_progreso',
            'id_producto',
            'SKU',
            'unidad_medida',
            'cantidad',
            'descripcion'
        ];
}
