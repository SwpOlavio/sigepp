<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaGrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade_id',
        'disciplina_id',
        'escola_id'
    ];
}
