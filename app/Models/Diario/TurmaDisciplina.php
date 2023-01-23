<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaDisciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'turma_id',
        'disciplina_id',
        'escola_id',
        'anoletivo_id',
    ];
}
