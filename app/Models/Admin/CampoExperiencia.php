<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampoExperiencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'campos',
        'codigo_objetivo',
        'objetivos',
        'referencia',
        'nivel',
    ];
}
