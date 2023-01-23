<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorDisciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_professor',
        'id_disciplina',
        'status',
        'id_anoLetivo',
        'id_escola'
    ];
}
