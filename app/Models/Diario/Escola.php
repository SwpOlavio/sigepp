<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'codigo',
        'telefone',
        'uf',
        'logradouro',
        'cidade',
        'bairro',
        'zona',
        'email',
        'cnpj',
        'situacao',
    ];

}
