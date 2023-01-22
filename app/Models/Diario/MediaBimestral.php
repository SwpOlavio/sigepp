<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaBimestral extends Model
{
    use HasFactory;
    protected $fillable = [
        'periodo_id',
        'anoletivo_id',
        'escola_id',
        'turma_id',
        'disciplina_id',
        'funcionario_id',
        'aluno_id',
        'media',
        'status',
    ];
}
