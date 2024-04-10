<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table='categorias'; //Esta propiedad está demás, no es necesaria
    protected $fillable = [
        'nombre',
        'imagen',
        'activo',
    ]; //el id ya no, pues se autogenera
}
