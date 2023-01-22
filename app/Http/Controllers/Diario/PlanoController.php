<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\Mapeamento;
use App\Models\Turma;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function listarTurmas(){

        $mapeamentos = Mapeamento::select('turma_id')
            ->groupBy('turma_id')
            ->where('funcionario_id', 15)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $dados = [];
        foreach ($mapeamentos as $mapeamento){
            $objeto = new \stdClass();
            $objeto->id = $mapeamento->turma_id;
            $objeto->turma = Turma::find($mapeamento->turma_id);
            $objeto->descricao = $mapeamento->turma->descricao;
            $objeto->cores = [0 => 'bg-light-warning', 1 => 'bg-light-danger', 2 => 'bg-light-success',3 => 'bg-light-info',
            ];
            $maps = Mapeamento::where('funcionario_id',15)->where('turma_id', $mapeamento->turma_id)->get();
            $objeto->disciplinas = $maps->map(fn($mapeamento) => Disciplina::find($mapeamento->disciplina_id));
            array_push($dados, $objeto);
        }

        return view('diario.plano.planos_turmas', ['mapeamentos' => $dados]);
    }
    public function listar(){

        $mapeamentos = Mapeamento::select('turma_id')
            ->groupBy('turma_id')
            ->where('funcionario_id', 15)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $dados = [];
        foreach ($mapeamentos as $mapeamento){
            $objeto = new \stdClass();
            $objeto->id = $mapeamento->turma_id;
            $objeto->turma = Turma::find($mapeamento->turma_id);
            $objeto->descricao = $mapeamento->turma->descricao;
            $objeto->cores = [0 => 'bg-light-warning', 1 => 'bg-light-danger', 2 => 'bg-light-success',3 => 'bg-light-info',
            ];
            $maps = Mapeamento::where('funcionario_id',15)->where('turma_id', $mapeamento->turma_id)->get();
            $objeto->disciplinas = $maps->map(fn($mapeamento) => Disciplina::find($mapeamento->disciplina_id));
            array_push($dados, $objeto);
        }

        return view('diario.plano.planos', ['mapeamentos' => $dados]);
    }

    public function teste($resuest, $model = null){
        echo "<pre>";
        print_r($resuest);
        print_r($model);
        exit;
    }
}
