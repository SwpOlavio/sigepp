<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    use HasFactory;
    protected $fillable = [
        'anoletivo_id',
        'periodo_id',
        'conteudo_id',
        'escola_id',
        'turma_id',
        'disciplina_id',
        'professor_id',
        'aluno_id',
        'aluno_numero',
        'falta1',
        'falta2',
        'falta3',
        'falta4',
        'falta5'
    ];
}
