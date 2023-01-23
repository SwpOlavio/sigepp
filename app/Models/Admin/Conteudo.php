<?php

namespace App\Models;

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
        'status',
        'periodo',
        'funcionario_id',
        'periodo_id',
        'turma_id',
        'lancou_falta',
        'disciplina_id',
        'escola_id',
        'anoletivo_id',
    ];
    public function setDataAttribute($value){
        $this->attributes['data'] = $this->convertStringToDate($value);
    }
    public function getDataConteudoAttribute(){
        return (new \DateTime($this->data))->format('d-m-Y');
    }
    private function convertStringToDate($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }
}
