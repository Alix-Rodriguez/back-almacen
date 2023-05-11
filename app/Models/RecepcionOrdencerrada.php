<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecepcionOrdencerrada extends Model
{
    public $table = 'recepcion_ordenescerradas';
    use HasFactory;
    protected $fillable = [
        'id',
        'id_empresas',
        'id_almacen',
        'status'
    ];
}
