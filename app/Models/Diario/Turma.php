<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'vagas',
        'atendimento',
        'prof_unico',
        'turno',
        'grade_id',
        'situacao',
        'flag_ano',
        'escola_id',
        'anoletivo_id'
    ];
    public function grade(){
        return $this->belongsTo(Grade::class, 'grade_id');
    }
    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class, 'turma_disciplinas','turma_id','disciplina_id');
    }

}
