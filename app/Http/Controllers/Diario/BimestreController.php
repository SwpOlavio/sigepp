<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\NotaTipo;
use App\Models\PeriodoTurma;
use App\Models\Turma;
use Illuminate\Http\Request;

class NotaTipoController extends Controller
{

    public function listarNotas(Turma $turma, Disciplina $disciplina)
    {
        $periodos = PeriodoTurma::where('turma_id',$turma->id)
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

                $nota_tipos = NotaTipo::where('turma_id',$turma->id)
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

        return view('diario.nota.notatipos',[
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodos' => $periodos,
            'listaNotaTipos' => $listaNotaTipos,
            'statusBimestre' =>$statusBimestre,
            'liberarBimestre' =>$liberarBimestre,
            'diarioFinalizado' =>$diarioFinalizado,
        ]);
    }
    public function teste($resuest, $model = null){
        echo "<pre>";
        print_r($resuest);
        print_r($model);
        exit;
    }

}
