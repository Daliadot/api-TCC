<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = [
        'nm_usuario',
        'email',
        'senha',
        'cpf'
    ];
}
