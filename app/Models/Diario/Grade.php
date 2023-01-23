<?php

namespace App\Models\Diario;

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
        'flag_ano',
        'escola_id',
    ];

    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class, 'disciplina_grades','grade_id','disciplina_id')->withPivot('id');
    }
}
