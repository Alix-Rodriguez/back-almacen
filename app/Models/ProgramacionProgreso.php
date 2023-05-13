<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramacionProgreso extends Model
{
    public $table = 'programacion_progreso';
    use HasFactory;

    protected $fillable = [
        'id',
        'id_proveedor',
        'id_almacen',
        'id_empresa',
        'fecha',
        'indicaciones',
        'observacion'
    ];
}
