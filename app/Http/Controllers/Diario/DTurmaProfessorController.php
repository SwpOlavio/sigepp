<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Admin\Disciplina;
use App\Models\Admin\Turma;
use App\Models\Diario\TurmaProfessor;

class DTurmaProfessorController extends Controller
{
    public function index() {

        $turmasProfessor = TurmaProfessor::select('turma_id')
            ->groupBy('turma_id')
            ->where('professor_id',12)
            ->where('escola_id', 2)
            ->where('anoletivo_id',2)
            ->get();

        //$turmasProfessor = TurmaProfessor::where('professor_id', 12)->get();

        $turmas = [];

        foreach ($turmasProfessor as $mapeamento){
            $objeto = new \stdClass();
            $objeto->id = $mapeamento->turma_id;
            $objeto->turma = Turma::find($mapeamento->turma_id);
            $objeto->descricao = $objeto->turma->descricao;
            $objeto->cores = [0 => 'bg-light-warning', 1 => 'bg-light-danger', 2 => 'bg-light-success',3 => 'bg-light-info',];
            $maps = TurmaProfessor::where('professor_id', 12)->where('turma_id', $mapeamento->turma_id)->get();
            $objeto->disciplinas = $maps->map(fn($mapeamento) => Disciplina::find($mapeamento->disciplina_id));
            array_push($turmas, $objeto);
        }

       // dd($turmas);

        return view('diario.turma.turma',['turmas' => $turmas]);
    }
}
