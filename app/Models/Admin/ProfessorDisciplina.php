<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorDisciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'funcionario_id',
        'disciplina_id',
        'anoletivo_id',
        'escola_id',
    ];
}
