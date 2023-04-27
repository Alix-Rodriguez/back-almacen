<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayoutQA extends Model
{
    use HasFactory;
    protected $filltable = [
        'id',
        'id_zonaqa',
        'id_rackqa',
        'id_nivelqa',
        'id_localidadqa'
    ];
}
