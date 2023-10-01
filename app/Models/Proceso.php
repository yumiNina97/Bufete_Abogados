<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proceso extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'roles';

    protected $fillable = [
        'cliente_id',
        'nombre',
        'descripcion',
        'tipo',
        'estado',
        'personas',
        'fecha_cita',
        'posicion',
        'contra_demanda',
        'deleted_at',
    ];
}
