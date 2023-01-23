<?php

namespace App\Models\Diario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoTurma extends Model
{
    use HasFactory;
    protected $fillable = [
        'tpd',
        'ordem',
        'status',
        'escola_id',
        'anoLetivo_id',
    ];
}
