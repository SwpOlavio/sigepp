<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\MediaAnual;
use App\Models\PeriodoTurma;
use App\Models\SchoolsYears;
use App\Models\Turma;
use Illuminate\Http\Request;

class RecuperacaoController extends Controller
{
    public function salvar(Request $request, Turma $turma, Disciplina $disciplina){

        $mediaAnuais = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();
        $mediaSalva = false;
        foreach ($mediaAnuais as $mediaAnal){
            if ($mediaAnal->media > 0){
                $mediaSalva = true;
                break;
            }
        }
        if (!$mediaSalva){
            $msg = $this->message->error(title:'Oops!', message:'A média anual ainda não foi salva.');
            return back()->with('status',$msg);
        }

        if ($this->popular_recuperacao($request, $turma, $disciplina)){
            $msg = $this->message->success(title:'Parabéns', message:'Recuperações salvas com sucesso.');
            return back()->with('status',$msg);
        }

        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
    }
    public function teste($resuest, $model = null){
        echo "<pre>";
        print_r($resuest);
        print_r($model);
        exit;
    }
    public function popular_recuperacao(Request $request, Turma $turma, Disciplina $disciplina){

        $recuperacoes = $request->input('recuperacoes');

        foreach ($recuperacoes as $aluno_id => $recuperacao){

            $mediaAnual = MediaAnual::where('turma_id',$turma->id)
                ->where('disciplina_id',$disciplina->id)
                ->where('aluno_id',$aluno_id)
                ->where('escola_id',1)
                ->where('anoletivo_id',1)
                ->first();

            $mediaAnual->recuperacao = $recuperacao;
            $mediaAnual->funcionario_id = 18;
            $mediaAnual->aluno_id = $aluno_id;
            $mediaAnual->turma_id = $turma->id;
            $mediaAnual->disciplina_id = $disciplina->id;
            $mediaAnual->escola_id = 1;
            $mediaAnual->anoletivo_id = 1;

            $mediaAnual->save();
        }

        return true;

    }
    public function limpar(Turma $turma, Disciplina $disciplina){

        $mediaAnual = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->update(['recuperacao' => 0]);

        if (!empty($mediaAnual)){
            $msg = $this->message->success(title:'Parabéns', message:'Recuperações limpas com sucesso.');
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
}
