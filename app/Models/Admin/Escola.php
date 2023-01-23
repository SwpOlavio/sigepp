<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'inep',
        'name',
        'phone',
        'uf',
        'street',
        'city',
        'cep',
        'neighborhood',
        'zone',
        'email',
        'site',
        'cnpj',
        'status',
    ];
}
