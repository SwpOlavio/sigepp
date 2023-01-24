<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaAnual extends Model
{
    use HasFactory;
    protected $fillable = [
        'turma_id',
        'disciplina_id',
        'professor_id',
        'aluno_id',
        'b1',
        'b2',
        'b3',
        'b4',
        'media',
        'recuperacao',
        'conselho',
        'status_sigla',
        'escola_id',
        'anoletivo_id'
    ];
}
