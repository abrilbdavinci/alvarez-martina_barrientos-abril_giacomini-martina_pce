<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'articulo_id';
    protected $fillable = ['titulo', 'contenido', 'autor', 'imagen', 'categoria'];
}
