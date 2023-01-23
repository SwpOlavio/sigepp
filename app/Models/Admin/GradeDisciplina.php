<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeDisciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade_id',
        'disciplina_id',
    ];
}
