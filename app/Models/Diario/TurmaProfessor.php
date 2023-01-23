<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaProfessor extends Model
{
    use HasFactory;
    protected $fillable = [
        'turma_id',
        'professor_id',
        'disciplina_id',
        'anoletivo_id',
        'escola_id',
        'status',
    ];
}
