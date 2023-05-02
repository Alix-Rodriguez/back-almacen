<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaProducto extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'linea_productos';
    
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
