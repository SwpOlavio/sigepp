<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNota extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'tipo',
        'professor_id',
        'turma_id',
        'disciplina_id',
        'periodo_id',
        'escola_id',
        'anoletivo_id'
    ];
    protected $periodos;
}
