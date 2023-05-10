<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitting extends Model
{
    public $table = 'kittings';
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id',
        'id_producto',
        'id_kitting'
    ];
}
