<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaTipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'tipo',
        'periodo_id',
        'escola_id',
        'turma_id',
        'disciplina_id',
        'anoletivo_id',
    ];
    public function setDataAttribute($value){
        $this->attributes['data'] = $this->convertStringToDate($value);
    }
    private function convertStringToDate($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }

}
