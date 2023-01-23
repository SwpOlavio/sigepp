<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'prof_nome',
        'prof_cpf',
        'prof_rg',
        'prof_sexo',
        'prof_codigo',
        'prof_turno1',
        'prof_matricula2',
        'prof_turno2',
        'prof_email',
        'prof_nivel',
        'prof_bairro',
        'prof_cidade',
        'prof_uf',
        'prof_ativo',
        'prof_logradouro',
        'prof_celular1',
        'prof_celular2',
        'prof_cargo',
        'prof_sobre',
        'prof_id_escola'
    ];
}
