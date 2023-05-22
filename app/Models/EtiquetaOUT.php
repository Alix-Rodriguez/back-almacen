<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetaOUT extends Model
{
    public $table = 'etiqueta_o_u_t_s';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id',
        'id_almacen',
        'id_empresa',
        'fecha_picking'
    ];
}
