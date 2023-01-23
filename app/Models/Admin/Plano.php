<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;
    protected $fillable = [
        'data_inicio',
        'data_fim',
        'campo_referencia',
        'bimestre',
        'serie',
        'visualizado',
        'flag_ano',
        'disciplina_id',
        'turma_id',
        'conteudo',
        'avaliacao',
        'recursos',
        'escola_id',
        'anoletivo_id',
    ];
}
