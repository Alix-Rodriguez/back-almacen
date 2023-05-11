<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcionprocesar extends Model
{
    public $table = 'recepcion_procesar';
    use HasFactory;
    protected $fillable = [
        'id',
        'id_empresas',
        'id_almacen',
        'status'
    ];
}
