<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'modalidade',
        'nivel',
        'turno',
        'etapa',
        'tipo_avaliacao',
        'escola_id',
        'grade',
    ];
    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class,'grade_disciplinas','grade_id', 'disciplina_id')->withPivot('id');
    }
}
