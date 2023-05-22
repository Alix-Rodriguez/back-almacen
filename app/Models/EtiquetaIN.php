<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaIN extends Model
{
    public $table = 'etiqueta_i_n_s';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id',
        'id_almacen',
        'id_empresa',
        'fecha',
        'referencia'
    ];
}
