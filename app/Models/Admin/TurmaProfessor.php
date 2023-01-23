<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaProfessor extends Model
{
    use HasFactory;
    protected $fillable = [
        'turma_id',
        'funcionario_id',
        'disciplina_id',
        'anoletivo_id',
        'escola_id',
        'status',
    ];
    /** O Eloquente tentará encontrar funcionario_id no modelo Mapeamento */
    public function professores(){
        //return $this->belongsTo(Funcionario::class,'funcionario_id','id');
    }
    /** O Eloquente tentará encontrar funcionario_id no modelo Mapeamento */
    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id','id');
    }
    public function turma(){
        return $this->belongsTo(Turma::class,'turma_id','id');
    }

}
