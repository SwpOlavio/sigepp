<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaBimestral extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'professor_id',
        'periodo_id',
        'turma_id',
        'disciplina_id',
        'escola_id',
        'anoletivo_id',
        'nota1',
        'nota2',
        'nota3',
        'nota4',
        'recuperacao',
        'recuperacao2',
        'media',
        'status',
        'status_sigla'
    ];
}
