<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'ch_semanal',
        'ch_anual',
        'escola_id',
        'ordem',
    ];
    /** passa o nome da disciplina para converter em ordem */
    public function setOrdemAttribute($ordem){
        $this->attributes['ordem'] = match ($ordem) {
            'Língua Portuguesa' => 1,
            'Matemática' => 2,
            'História' => 3,
            'Geografia' => 4,
            'Ciências' => 5,
            'Arte' => 6,
            'Ensino Religioso' => 7,
            'Inglês' => 8,
            'Filosofia' => 9,
            'Educação Física' => 10,
            'Estudo da Natureza e Sociedade' => 11,
            'Química' => 12,
            'Física' => 13,
            'Literatura' => 14,
            'Produção Textual' => 15,
            'Gramática' => 16,
            'Campo de experiências' => 20,
            default => 0,
        };
    }
    public function grades(){
        return $this->belongsToMany(Grade::class);
    }
    /** Relaciona disciplina com professores usando a tabela professor_disciplinas  */
    public function professores(){
        return $this->belongsToMany(Funcionario::class,'professor_disciplinas');
    }
}
