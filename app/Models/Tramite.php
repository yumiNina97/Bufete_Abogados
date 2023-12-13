<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tramite extends Model
{
    use HasFactory,SoftDeletes;

    // protected $table = 'roles';

    protected $fillable = [
        'cliente_id',
        'nombre',
        'descripcion',
        'tipo',
        'estado',
        'personas',
        'cita',
        'deleted_at',
    ];
}
