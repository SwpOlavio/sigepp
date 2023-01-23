<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'numero',
        'data',
        'serie',
        'turma_id',
        'escola_id',
        'anoletivo_id'
    ];
}
