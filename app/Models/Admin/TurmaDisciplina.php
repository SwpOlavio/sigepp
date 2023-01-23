<?php

namespace App\Models;

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
