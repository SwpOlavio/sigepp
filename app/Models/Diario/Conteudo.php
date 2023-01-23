<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'hora_aula',
        'conteudo',
        'habilidades',
        'tipo_aula',
        'plataforma',
        'professor_id',
        'periodo_id',
        'escola_id',
        'turma_id',
        'disciplina_id',
        'lancou_falta',
        'anoletivo_id',
        'contagem'
    ];

    public function getDataConteudoAttribute($value){
        return (new \DateTime($value))->format('d/m/Y');
    }
    public function setDataConteudoAttribute($value) {
        $this->attributes['data'] = $this->converterDataBanco($value);
    }
    private function converterDataBanco($value) {
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }
}
