<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaAluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'turma_id',
        'numero',
        'data',
        'escola_id',
        'anoletivo_id',
    ];
}
