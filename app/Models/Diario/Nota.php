<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nota',
        'nota_tipo_id',
        'funcionario_id',
        'aluno_id',
        'periodo_id',
        'escola_id',
        'turma_id',
        'disciplina_id',
        'anoletivo_id',

    ];

}
