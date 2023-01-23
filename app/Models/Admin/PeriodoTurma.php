<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoTurma extends Model
{
    use HasFactory;
    protected $fillable = [
        'ordem',
        'status',
        'turma_id',
        'disciplina_id',
        'escola_id',
        'anoletivo_id',
    ];
}
