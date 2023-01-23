<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'inep',
        'nome',
        'genero',
        'data_nascimento',
        'uf_nascimento',
        'rg',
        'data_expedicao_registro',
        'nacionalidade',
        'naturalidade',
        'cpf',
        'celular',
        'programa_social',
        'nis',
        'programa_bpc',
        'matricula',
        'comarca',
        'folha',
        'livro',
        'data_expedicao',
        'uf_registro',
        'raca',
        'deficiencia',
        'tipo_deficiencia',
        'sus',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf_endereco',
        'nacao',
        'cep',
        'codigo',
        'escola_id',
    ];

    public function setDataNascimentoAttribute($value){
        $this->attributes['data_nascimento'] =  $this->convertStringToDate($value);
    }
    public function setDataNascimentoRegistroAttribute($value){
        $this->attributes['data_nascimento_registro'] =  $this->convertStringToDate($value);
    }
    public function setDataExpedicaoRegistroAttribute($value){
        $this->attributes['data_expedicao_registro'] =  $this->convertStringToDate($value);
    }
    public function setDataExpedicaoAttribute($value){
        $this->attributes['data_expedicao'] =  $this->convertStringToDate($value);
    }
    private function convertStringToDate($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }
    public function responsavels(){
        return $this->hasMany(Responsavel::class);
    }
}
