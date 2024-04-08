<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcliente',
        'idfuncionario',
        'numeroquarto',
        'situacao',
        'valortotal',
        'dataEntrada',
        'dataSaida',
    ];
}
