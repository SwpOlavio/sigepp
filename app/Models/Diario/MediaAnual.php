<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaAnual extends Model
{
    use HasFactory;
    protected $fillable = [
        'b1',
        'b2',
        'b3',
        'b4',
        'media',
        'recuperacao',
        'conselho',
        'turma_id',
        'disciplina_id',
        'aluno_id',
        'professor_id',
        'status',
        'escola_id',
        'anoletivo_id',
        'status_sigla'
    ];
}
