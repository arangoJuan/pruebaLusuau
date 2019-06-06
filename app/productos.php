<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table='productos';

    protected $fillable = ['nombre', 'descripcion', 'precio', 'descuento', 'imagen', 'etiqueta'];

    public $timestamps = false;
}
