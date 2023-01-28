<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;


use App\Models\Admin\Disciplina;
use App\Models\Admin\Turma;
use App\Models\Admin\TurmaProfessor;
use App\Models\Diario\Matricula;
use App\Models\Diario\MediaBimestral;
use App\Models\Diario\Nota;
use App\Models\Diario\PeriodoTurma;
use App\Models\Diario\TipoNota;

class BimestreController extends Controller
{
    public function listar(Turma $turma, Disciplina $disciplina)
    {

        $matriculas = Matricula::select('matriculas.id', 'matriculas.numero','matriculas.serie', 'matriculas.aluno_id','matriculas.data','alunos.aluno_nome','alunos.aluno_inep')
            ->leftJoin('alunos','alunos.id','matriculas.aluno_id')
            ->where('matriculas.turma_id', 4)
            ->where('matriculas.escola_id', 2)
            ->where('matriculas.anoletivo_id', 2)
            ->orderBy('numero')
            ->get();

        $series = [];
        $multisseriada = false;
        if ($turma->atendimento === 'Multisseriada Infantil'){
            $series = [10 => 'Infantil I',11 => 'Infantil II', 12 => 'Infantil III' ];
            $multisseriada = true;
        }else if ($turma->atendimento === 'Multisseriada Fundamental'){
            $series = [1 => '1° Ano', 2 => '2º Ano', 3 => '3º Ano',4 => '4º Ano',5 => '5º Ano',6 => '6º Ano',7 => '7º Ano', 8 => '8º Ano',9 => '9º Ano'];
            $multisseriada = true;
        }else if ($turma->atendimento === 'Multisseriada Infantil e Fundamental'){
            $series = [1 => '1° Ano', 2 => '2º Ano', 3 => '3º Ano',4 => '4º Ano',5 => '5º Ano',6 => '6º Ano',7 => '7º Ano', 8 => '8º Ano',9 => '9º Ano',10 => 'Infantil I',11 => 'Infantil II', 12 => 'Infantil III' ];
            $multisseriada = true;
        }


        $matriculas_lista = [];
        foreach ($matriculas as $matricula){
            $temp = (object)[
                'id' => $matricula->id,
                'aluno_id' => $matricula->aluno_id,
                'numero' => $matricula->numero,
                'nome' => $matricula->aluno_nome,
                'serie' => $matricula->serie,
                'inep' => $matricula->aluno_inep,
                'data' => (new \DateTime($matricula->data))->format('d/m/Y'),
                'status' => 'MTR',
                'turno' => $turma->turno,
                'falta' => $faltas->falta ?? 0,
            ];

            $matriculas_lista[] = $temp;
        }

//        foreach ($matriculas as $matricula){
//            $notas = Nota::where('turma_id', $turma->id)
//                ->where('disciplina_id', $disciplina->id)
//                ->where('escola_id', 2)
//                ->where('anoletivo_id', 2)
//                ->where('professor_id', 12)
//                ->where('aluno_id', $matricula->aluno_id)
//                ->delete();
//        }

        // Listar os bimestres ------------------------------------------------------------------

        $periodoPofessors = TurmaProfessor::select('periodo_turmas.id', 'periodo_turmas.ordem')
            ->leftJoin('periodo_turmas','periodo_turmas.tpd','turma_professors.id')
            ->where('turma_professors.turma_id', $turma->id)
            ->where('turma_professors.disciplina_id', $disciplina->id)
            ->where('turma_professors.professor_id', 12)
            ->where('turma_professors.escola_id', 2)
            ->where('turma_professors.anoletivo_id', 2)
            ->orderBy('periodo_turmas.ordem', 'ASC')
            ->get();
        // 727 a 733


        // Verifica se tem nota cadastrada (Trabaho, Prova, ...)
        $tipoNotas = TipoNota::where('turma_id', $turma->id)
            ->where('disciplina_id', $disciplina->id)
            ->where('escola_id', 2)
            ->where('anoletivo_id', 2)
            ->where('professor_id', 12)
            ->get();

        //dd($tipoNotas);



//        $tipoNotas->each(function($item) use ($periodoPofessors) {
//            $item->data = (new \DateTime($item->data))->format('d/m/Y');
//            $item->periodos = $periodoPofessors;
//        });
//        $listaNotas = [];
//        foreach ($tipoNotas as $item){
//            $lista = [
//                'data' => (new \DateTime($item->data))->format('d/m/Y'),
//                'periodos' => $periodoPofessors,
//            ];
//            $listaNotas[] = $lista;
//        }
        $notas = Nota::where('turma_id', $turma->id)
            ->where('disciplina_id', $disciplina->id)
            ->where('escola_id', 2)
            ->where('anoletivo_id', 2)
            ->where('professor_id', 12)
            ->get();
//

        //$tipoNotasB1 = $tipoNotas->where('periodo_id', $periodo1->id);

        $listaBimestre = [];
        foreach ($periodoPofessors as $periodoPofessor){

            $tipoNotas = $tipoNotas->where('periodo_id', $periodoPofessor->id);
            foreach ($tipoNotas as $tipoNota){
                $notasAlunos = $notas->where('tipo_nota_id', $tipoNota->id);
                $listaBimestre[$periodoPofessor->ordem] = [
                    'data' => (new \DateTime($tipoNota->data))->format('d/m/Y'),
                    'tipoNota' => $tipoNota,
                    'notasAlunos' => $notasAlunos,
                ];
            }
        }

        $bimestre1 = $listaBimestre[1] ?? null;
        $bimestre2 = $listaBimestre[2] ?? null;
        $bimestre3 = $listaBimestre[3] ?? null;
        $bimestre4 = $listaBimestre[4] ?? null;

        dd($bimestre1);


//        foreach ($tipoNotasB1 as $tipoNota){
//            $notasAlunos = $notas->where('periodo_id', $tipoNota->periodo_id)->where('tipo_nota_id', $tipoNota->id);
//            $listaBimestre1[] = [
//                'data' => (new \DateTime($tipoNota->data))->format('d/m/Y'),
//                'tipoNota' => $tipoNota,
//                'notasAlunos' => $notasAlunos,
//            ];
//        }



        //$tipoNotas->notas = $listaNotas;

//        $tipoNotas =  $tipoNotas->map(function($item){
//            return {
//                $nota = Nota::where('periodo_id', $item->id)->where('tipo_nota_id', $item->id)->first();
//            }
//        }


        $mediasBimestralais = MediaBimestral::where('turma_id', $turma->id)
            ->where('disciplina_id', $disciplina->id)
            ->where('escola_id', 2)
            ->where('anoletivo_id', 2)
            ->get();

        $listaMediasSalvas = $periodoPofessors->map(function($item) use ($mediasBimestralais){
            if ($item->ordem <= 4){
                return ([
                    'ordem' => $item->ordem,
                    'salvo' => $mediasBimestralais->where('periodo_id', $item->id)->where('media', '>', 0)->count() > 0 ? 1: 0
                ]);
            }
        });

        //--------------------------------------------------------------------------------------------------------
        return view('diario.bimestres.bimestres',[
                'turma' => $turma,
                'disciplina' => $disciplina,
                'listaTipoNotas' => $tipoNotas,
                'mediasSalvas' => $listaMediasSalvas,
                'periodos' => $periodoPofessors,
                'matriculas' => $matriculas_lista,
                'series' => $series,
                'multisseriada' => $multisseriada,
            ]
        );
    }
}
