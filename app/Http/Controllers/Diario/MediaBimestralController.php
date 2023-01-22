<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Disciplina;
use App\Models\MediaBimestral;
use App\Models\NotaTipo;
use App\Models\PeriodoTurma;
use App\Models\SchoolsYears;
use App\Models\Turma;
use Illuminate\Http\Request;

class MediaBimestralController extends Controller
{
    public function salvar(Request $request, Turma $turma, Disciplina $disciplina, int $periodoTurma){

            if ($this->popular_medias($request, $turma, $disciplina, $periodoTurma)){
                $msg = $this->message->success(title:'Parabéns', message:'As médias foram salvas com sucesso.');
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
    public function popular_medias(Request $request, Turma $turma, Disciplina $disciplina, int $periodoTurma ){

            $medias = $request->input('medias');

            $mediaEscolar = SchoolsYears::where('school_id',1)->where('year',2021)->first()->school_average;

            foreach ($medias as $aluno_id => $media){
                $mediaBimestral = new MediaBimestral();
                $mediaBimestral->media = $media;
                $mediaBimestral->periodo_id = $periodoTurma;
                $mediaBimestral->funcionario_id = 18;
                $mediaBimestral->aluno_id = $aluno_id;
                $mediaBimestral->turma_id = $turma->id;
                $mediaBimestral->disciplina_id = $disciplina->id;
                $mediaBimestral->escola_id = 1;
                $mediaBimestral->anoletivo_id = 1;

                if($media >= $mediaEscolar){
                    $mediaBimestral->status = 'ACM';
                }else{
                    $mediaBimestral->status = 'ABM';
                }

                $mediaBimestral->save();
            }

        return true;

    }
    public function limpar(Turma $turma, Disciplina $disciplina, int $periodoTurma){

        $mediaBimestral = MediaBimestral::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('periodo_id', $periodoTurma)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->delete();

        if ($mediaBimestral){
            $msg = $this->message->success(title:'Parabéns', message:'As média foram removidas com sucesso.');
            return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
        }
        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
    }
    public function fechar(Turma $turma, Disciplina $disciplina, int $periodoTurma){

        $mediaBimestral = PeriodoTurma::find($periodoTurma)->update(['status' => 1]); // status 1 é fechado e 0 é aberto
        if ($mediaBimestral == 0){
            $json['redirect'] = null;
            $json['data'] = $this->message->error(title:'Error', message: 'Oops! Falha ao deletar o registro.')->render();
            return response()->json($json);
        }

        $json['redirect'] = route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina]);
        $json['data'] =  $this->message->success(title:'Parabéns', message: 'Bimestre fechado com sucesso.')->render();
        return response()->json($json);
    }
}
