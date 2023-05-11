<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionUbicarCerrar extends Model
{
    public $table = 'recepcion_ubicarcerrar'; 
    use HasFactory;

    protected $fillable = [
        'id',
        'id_empresas',
        'id_almacen'
    ];
}
