<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anoletivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'data_inicio',
        'data_fim',
        'data_matricula_inicio',
        'data_matricula_fim',
        'qtde_turma',
        'media',
        'escola_id',
    ];
    public function getDataInicioAttribute($value){
        return (new \DateTime($value))->format('d/m/Y');
    }
    public function setDataInicioAttribute($value){
        $this->attributes['data_inicio'] = $this->converterDataBanco($value);
    }
    public function getDataFimAttribute($value){
        return (new \DateTime($value))->format('d/m/Y');
    }
    public function setDataFimAttribute($value){
        $this->attributes['data_fim'] = $this->converterDataBanco($value);
    }
    public function getDataMatriculaInicioAttribute($value){
        return (new \DateTime($value))->format('d/m/Y');
    }
    public function setDataMatriculaInicioAttribute($value){
        $this->attributes['data_matricula_inicio'] = $this->converterDataBanco($value);
    }
    public function getDataMatriculaFimAttribute($value){
        return (new \DateTime($value))->format('d/m/Y');
    }
    public function setDataMatriculaFimAttribute($value){
        $this->attributes['data_matricula_fim'] = $this->converterDataBanco($value);
    }
    private function converterDataBanco($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }

}
