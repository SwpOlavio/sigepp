<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\MediaAnual;
use App\Models\MediaBimestral;
use App\Models\PeriodoTurma;
use App\Models\SchoolsYears;
use App\Models\Turma;
use Illuminate\Http\Request;

class MediaAnualController extends Controller
{
    public function salvar(Request $request, Turma $turma, Disciplina $disciplina, int $periodoTurma){

        $mensagem = $this->popular_media_anual($request, $turma, $disciplina,$periodoTurma);
        if ($mensagem){
            return back()->with('status',$mensagem);
        }

        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
    }
    public function popular_media_anual(Request $request, Turma $turma, Disciplina $disciplina, $periodoTurma){

        $medias = $request->input('media_anuais');
        $mediaEscolar = SchoolsYears::where('school_id',1)->where('year',2021)->first()->school_average;

        if (!empty($request->acao == 'editar')) {
            foreach ($medias as $aluno_id => $media){
                $mediaAnual = MediaAnual::where('aluno_id', $aluno_id)
                    ->where('disciplina_id',$disciplina->id)
                    ->where('escola_id',1)
                    ->where('anoletivo_id',1)
                    ->first();

//                if ($media >= $mediaEscolar && $mediaAnual->recuperacao == 0 && $mediaAnual->conselho == 0) {
//                    $mediaAnual->status = 'APROVADO';
//                } else {
//                    $mediaAnual->status = 'REPROVADO';
//                }

                $mediaAnual->media = $media;
                $mediaAnual->save();
            }
            $periodo = PeriodoTurma::find($periodoTurma);
            $periodo->update(['status' => 1]);

            return $this->message->success(title:'Parabéns', message:'Médias anuais atualizadas com sucesso.');

        }else {

            foreach ($medias as $aluno_id => $media) {
                $mediaAnual = new MediaAnual();
                $mediaAnual->media = $media;
                $mediaAnual->funcionario_id = 18;
                $mediaAnual->aluno_id = $aluno_id;
                $mediaAnual->turma_id = $turma->id;
                $mediaAnual->disciplina_id = $disciplina->id;
                $mediaAnual->escola_id = 1;
                $mediaAnual->anoletivo_id = 1;

//                if ($media >= $mediaEscolar ) {
//                    $mediaAnual->status = 'APROVADO';
//                } else {
//                    $mediaAnual->status = 'REPROVADO';
//                }
                $mediaAnual->save();

            }
            $periodo = PeriodoTurma::find($periodoTurma);
            $periodo->update(['status' => 1]);

        }

        return $this->message->success(title:'Parabéns', message:'Médias anuais salvas com sucesso.');

    }
    public function limpar(Turma $turma, Disciplina $disciplina, $periodoTurma){

        $mediaAnual = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->update(['media' => 0,'recuperacao' => 0, 'conselho' => 0]);

        $periodo = PeriodoTurma::find($periodoTurma);
        $periodo->update(['status' => 0]);

        if (!empty($mediaAnual)){
            $msg = $this->message->success(title:'Parabéns', message:'As médias anuais removidas com sucesso.');
            return back()->with('status',$msg);
        }
        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
    }

    public function fechar(Turma $turma, Disciplina $disciplina){

        $pTurma = PeriodoTurma::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('ordem',6)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->first();

        if (!empty($pTurma)){
            $pTurma->update(['status'=> 1]);
            $json['redirect'] = route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina]);
            $json['data'] =  $this->message->success(title:'Parabéns', message: 'Diario finalizado com sucesso.')->render();
            return response()->json($json);
        }
        $json['redirect'] = null;
        $json['data'] = $this->message->error(title:'Error', message: 'Oops! Falha ao finalizar o diário.')->render();
        return response()->json($json);
    }
    public function teste($resuest, $model = null){
        echo "<pre>";
        print_r($resuest);
        print_r($model);
        exit;
    }
}
