<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use SoftDeletes;
    protected $tabla = 'reservas';
    protected $primarKey = 'id';
    Protected $fillable = ['nombre', 'telefono', 'correo', 'opcion', 'fecha'];
}
