<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaAnual extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'funcionario_id',
        'media',
        'recuperacao',
        'conselho',
        'turma_id',
        'disciplina_id',
        'escola_id',
        'anoletivo_id',
    ];
}
