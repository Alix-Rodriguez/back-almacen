<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

protected $filltable = [
    'nombre_empresa',
    'direccion_empresa',
    'centro_costo',
    'logo_empresa',
    'nif_empresa',

];

}
