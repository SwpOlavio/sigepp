<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\Mapeamento;
use App\Models\Turma;

class DiarioController extends Controller
{
    public function index(){
        return view('diario.dash.home');
    }
}
