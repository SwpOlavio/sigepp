<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;


use App\Models\Admin\Disciplina;
use App\Models\Admin\Turma;
use App\Models\Admin\TurmaProfessor;
use App\Models\Diario\PeriodoTurma;
use App\Models\Diario\TipoNota;



class BimestreController extends Controller
{

    public function listar(Turma $turma, Disciplina $disciplina)
    {
        $periodos = Professor::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->orderBy('ordem','asc')
            ->get();

        $listaNotaTipos = [];
        $statusBimestre = [];
        $liberarBimestre = [];

        $diarioFinalizado = false;

        foreach ($periodos as $periodo){

                $nota_tipos = TipoNota::where('turma_id',$turma->id)
                    ->where('disciplina_id',$disciplina->id)
                    ->where('periodo_id',$periodo->id)
                    ->where('escola_id',1)
                    ->where('anoletivo_id',1)
                    ->orderBy('created_at','asc')
                    ->get();

                array_push($listaNotaTipos, $nota_tipos);

                switch ($periodo->ordem){
                    case 1:
                        $statusBimestre[1] = $periodo->status;
                        if ($periodo->status == 1){
                            $liberarBimestre[2] = true; // libera o 2º bimestre
                        }else{
                            $liberarBimestre[2] = false; // não libera o 2º bimestre
                        }
                        break;
                    case 2:
                        $statusBimestre[2] = $periodo->status;
                        if ($periodo->status == 1){
                            $liberarBimestre[3] = true; // libera o 3º bimestre
                        }else{
                            $liberarBimestre[3] = false; // não libera o 3º bimestre
                        }
                        break;
                    case 3:
                        $statusBimestre[3] = $periodo->status;
                        if ($periodo->status == 1){
                            $liberarBimestre[4] = true; // libera o 4º bimestre
                        }else{
                            $liberarBimestre[4] = false; // não libera o 4º bimestre
                        }
                        break;
                    case 4:
                        $statusBimestre[4] = $periodo->status;
                        break;
                    case 6:

                        if ($periodo->status == 1){
                            $diarioFinalizado = true;
                        }
                        break;
                }

        }

        return view('diario.bimestres.bimestres',[
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodos' => $periodos,
            'listaNotaTipos' => $listaNotaTipos,
            'statusBimestre' =>$statusBimestre,
            'liberarBimestre' =>$liberarBimestre,
            'diarioFinalizado' =>$diarioFinalizado,
        ]);
    }
}
