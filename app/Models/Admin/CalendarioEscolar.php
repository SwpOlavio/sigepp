<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioEscolar extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start',
        'className',
        'end',
        'escola_id',
        'anoletivo_id',
    ];
    public function setStartAttribute($value){
        $this->attributes['start'] = $this->convertStringToDate($value);
    }
    public function setEndAttribute($value){
        $this->attributes['end'] = $this->convertStringToDate($value);
    }

    private function convertStringToDate($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }
}
