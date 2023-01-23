<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolsYears extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'init',
        'final',
        'init_register_student',
        'final_register_student',
        'amount_class',
        'school_average',
        'school_id',
    ];
    public function setInitAttribute($value){
        $this->attributes['init'] = $this->convertStringToDate($value);
    }

    public function getYearInitAttribute(){
        return (new \DateTime($this->init))->format('d/m/Y');
    }
    public function setFinalAttribute($value){
        $this->attributes['final'] = $this->convertStringToDate($value);
    }
    public function getYearFinalAttribute(){
        return (new \DateTime($this->final))->format('d/m/Y');
    }
    public function setInitRegisterStudentAttribute($value){
        $this->attributes['init_register_student'] =  $this->convertStringToDate($value);
    }
    public function getInitRegStudentAttribute(){
        return (new \DateTime($this->init_register_student))->format('d/m/Y');
    }
    public function setFinalRegisterStudentAttribute($value){
        $this->attributes['final_register_student'] = $this->convertStringToDate($value);
    }
    public function getFinalRegStudentAttribute(){
        return (new \DateTime($this->final_register_student))->format('d/m/Y');
    }
    public function setYearAttribute($value){
        $this->attributes['year'] = abs($value);
    }
    public function setAmountClassAttribute($value){
        $this->attributes['amount_class'] = abs($value);
    }




}
