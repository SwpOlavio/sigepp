<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nota',
        'aluno_id',
        'tipo_nota_id',
        'turma_id',
        'disciplina_id',
        'professor_id',
        'periodo_id',
        'escola_id',
        'anoletivo_id'
    ];
}
