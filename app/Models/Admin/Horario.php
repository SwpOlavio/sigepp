<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario',
        'inicial',
        'final',
        'turno',
        'anoletivo_id',
        'escola_id',
    ];
    public function getHorarioInicialAttribute(){
        return  (new \DateTime($this->inicial))->format('H:i');
    }
    public function getHorarioFinalAttribute(){
        return  (new \DateTime($this->final))->format('H:i');
    }

}
