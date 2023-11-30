<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes';

    protected $fillable = [
        // 'creador_id',
        // 'modificador_id',
        // 'eliminador_id',

        'nombres',
        'ap_paterno',
        'ap_materno',
        'cedula',
        'telefonos',
        'correo',
        'direccion',

        'estado',
        'deleted_at',
    ];
}