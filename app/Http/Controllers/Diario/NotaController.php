<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\MediaAnual;
use App\Models\MediaBimestral;
use App\Models\Nota;
use App\Models\NotaTipo;
use App\Models\PeriodoTurma;
use App\Models\SchoolsYears;
use App\Models\Turma;
use App\Models\TurmaAluno;
use Illuminate\Http\Request;
use function React\Promise\all;

class NotaController extends Controller
{
    public function listarCriar(Turma $turma, Disciplina $disciplina, int $periodo_id){
        $alunos = TurmaAluno::join('alunos','alunos.id','=','turma_alunos.aluno_id')
            ->select('alunos.id','alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia','turma_alunos.numero')
            ->where('turma_alunos.turma_id', $turma->id)
            ->where('turma_alunos.escola_id',1)
            ->where('turma_alunos.anoletivo_id',1)
            ->orderBy('numero','asc')
            ->get();
        return view('diario.nota.criar_notas', ['turma' => $turma, 'disciplina' => $disciplina, 'periodo_id' => $periodo_id,'alunos' => $alunos]);
    }
    public function listarEditar(Turma $turma, Disciplina $disciplina, int $periodo, int $notatipo){

        $notaTipo = NotaTipo::find($notatipo);

        $alunosNotas = Nota::join('alunos','alunos.id','=','notas.aluno_id')
            ->join('turma_alunos','notas.aluno_id','=','turma_alunos.aluno_id')
            ->select('alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia','turma_alunos.numero','notas.nota','notas.id')
            ->where('notas.turma_id', $turma->id)
            ->where('notas.disciplina_id', $disciplina->id)
            ->where('notas.nota_tipo_id',$notatipo)
            ->orderBy('numero','asc')
            ->get();

        return view('diario.nota.editar_notas', ['turma' => $turma, 'disciplina' => $disciplina, 'periodo_id' => $periodo,'alunosNotas' => $alunosNotas, 'notaTipo' => $notaTipo]);
    }
    public function listarMedia(Turma $turma, Disciplina $disciplina, int $periodo){


        $periodoTurmas = PeriodoTurma::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('ordem',$periodo)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->first();

        $notaTipos = NotaTipo::where('turma_id',$turma->id)

            ->where('disciplina_id',$disciplina->id)
            ->where('periodo_id',$periodoTurmas->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $listaDataTipos = [];
        foreach ($notaTipos as $notaTipo){
            $listaDataTipos[] = [
                'id' => $notaTipo->id,
                'tipo' => ($notaTipo->tipo == "Recuperação") ? "Recup" : $notaTipo->tipo,
            ] ;
        }

        $alunosNotas = Nota::join('alunos','alunos.id','=','notas.aluno_id')
            ->join('turma_alunos','alunos.id','=','turma_alunos.aluno_id')
            ->join('nota_tipos','nota_tipos.id','=','notas.nota_tipo_id')
            ->select('notas.aluno_id','turma_alunos.numero','alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia','notas.nota', 'nota_tipos.tipo','nota_tipos.created_at as data_created')
            ->where('notas.periodo_id', $periodoTurmas->id)
            ->where('notas.turma_id', $turma->id)
            ->where('notas.disciplina_id', $disciplina->id)
            ->where('notas.escola_id',1)
            ->where('notas.anoletivo_id',1)
            ->orderBy('turma_alunos.numero','asc')
            ->get();


        $mediaBimestral = MediaBimestral::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('periodo_id',$periodoTurmas->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();


        $listaMediaAlunos = [];
        $mediaSalva = false;
        foreach ($alunosNotas as $alunosNota){

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno'] = [
                'id'=>$alunosNota->aluno_id,
                'nome'=>$alunosNota->nome,
                'numero'=>$alunosNota->numero,
                'foto'=>$alunosNota->foto,
                'inep'=>$alunosNota->inep,
                'deficiencia'=>$alunosNota->deficiencia,
                'status' => 'ACM'
            ];

            $listaMediaAlunos[$alunosNota->aluno_id]['notas'][] = [
                'data' => $alunosNota->data_created,
                'tipo' => $alunosNota->tipo,
                'status' => $alunosNota->status,
                'nota' => number_format($alunosNota->nota,1),
                ];

            $c = collect($listaMediaAlunos[$alunosNota->aluno_id]['notas']);
            $listaMediaAlunos[$alunosNota->aluno_id]['notas'] = $c->sortBy('data');

            $soma[$alunosNota->aluno_id][] = $alunosNota->nota;

            $media = $soma[$alunosNota->aluno_id] != null ? array_sum($soma[$alunosNota->aluno_id])/count($soma[$alunosNota->aluno_id]) : 0.0; //$soma != null ? number_format(array_sum($soma)/count($soma),1) : 0.0;

            $mediaBim = 0;
            $status = '';
           foreach ($mediaBimestral as $medias){
               if ($medias->aluno_id == $alunosNota->aluno_id){
                   $status = $medias->status;
                   $mediaBim = $medias->media;
                   break;
               }
           }
           $listaMediaAlunos[$alunosNota->aluno_id]['status'] = $status;
           if ($status){
               $listaMediaAlunos[$alunosNota->aluno_id]['media'] = formatar_media($mediaBim);
               $mediaSalva = true;
           }else{
               $listaMediaAlunos[$alunosNota->aluno_id]['media'] = formatar_media($media);
           }

        }

        return view('diario.nota.criar_medias', [
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodo_id' => $periodoTurmas->id,
            'listaMediaAlunos' => $listaMediaAlunos,
            'notaTipos' => $notaTipos,
            'mediaSalva' => $mediaSalva,
        ]);
    }

    public function listarMediaAnual(Turma $turma, Disciplina $disciplina, int $periodo){

        $periodoTurmas = PeriodoTurma::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('ordem',$periodo)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->first();

        $mediaAnuais = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $listAlunos = TurmaAluno::join('alunos','alunos.id','=','turma_alunos.aluno_id')
            ->select('turma_alunos.aluno_id','turma_alunos.numero','alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia')
            ->where('turma_alunos.escola_id',1)
            ->where('turma_alunos.anoletivo_id',1)
            ->orderBy('turma_alunos.numero','asc')
            ->get();

        $mediaEscolar = SchoolsYears::where('school_id',1)->where('year',2021)->first()->school_average;


        $listaMediaAlunos = [];
        $mediaSalva = false;
        foreach ($listAlunos as $alunosNota){

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno'] = [
                'id'=>$alunosNota->aluno_id,
                'nome'=>$alunosNota->nome,
                'numero'=>$alunosNota->numero,
                'foto'=>$alunosNota->foto,
                'inep'=>$alunosNota->inep,
                'deficiencia'=>$alunosNota->deficiencia,
            ];

            $mediaBimestrais = MediaBimestral::where('turma_id',$turma->id)
                ->where('disciplina_id',$disciplina->id)
                ->where('aluno_id',$alunosNota->aluno_id)
                ->where('escola_id',1)
                ->where('anoletivo_id',1)
                ->orderBy('periodo_id','asc')
                ->get();

            $mediaAnual = $mediaBimestrais->avg('media');

            $mediaFinal = 0.0;

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['medias'] = $mediaBimestrais->toArray();

            $status = '';
            $recuperacao = 0.0;
            $conselho = 0.0;
            $mediaZerada = true;

            foreach ($mediaAnuais as $media_anual) {

                if ($media_anual->aluno_id == $alunosNota->aluno_id ) {
                    if ($media_anual->media > 0){
                       $mediaAnual = $media_anual->media;
                       $mediaZerada = false;
                    }
                    $recuperacao = $media_anual->recuperacao;
                    $conselho = $media_anual->conselho;

                    if ($conselho > 0) {
                        $mediaFinal = $conselho;
                    } else if ($recuperacao > 0){
                        $mediaFinal = $recuperacao;
                    } else if ($media_anual->media > 0){
                        $mediaFinal = $mediaAnual;
                    }
                    $mediaSalva = true;
                    $status = $this->status($mediaFinal, $mediaEscolar);
                    break;
                }
            }

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_anual'] = formatar_media($mediaAnual);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['recuperacao'] = formatar_media($recuperacao);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['conselho'] =  formatar_media($conselho);

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_final'] =  formatar_media($mediaFinal);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['status'] = $status;

        }

        return view('diario.nota.criar_media_anual', [
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodo_id' => $periodoTurmas->id,
            'listaMediaAlunos' => $listaMediaAlunos,
            'mediaSalva' => $mediaSalva,
            'mediaZerada' => $mediaZerada,
            'mediaEscolar' => $mediaEscolar,
        ]);
    }

    public function listarRecuperacao(Turma $turma, Disciplina $disciplina, int $periodo){

        $periodoTurmas = PeriodoTurma::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('ordem',$periodo)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->first();

        $mediaAnuais = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $listAlunos = TurmaAluno::join('alunos','alunos.id','=','turma_alunos.aluno_id')
            ->select('turma_alunos.aluno_id','turma_alunos.numero','alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia')
            ->where('turma_alunos.escola_id',1)
            ->where('turma_alunos.anoletivo_id',1)
            ->orderBy('turma_alunos.numero','asc')
            ->get();

        $mediaEscolar = SchoolsYears::where('school_id',1)->where('year',2021)->first()->school_average;

        $listaMediaAlunos = [];
        $recuperacaoSalva = false;
        foreach ($listAlunos as $alunosNota){

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno'] = [
                'id'=>$alunosNota->aluno_id,
                'nome'=>$alunosNota->nome,
                'numero'=>$alunosNota->numero,
                'foto'=>$alunosNota->foto,
                'inep'=>$alunosNota->inep,
                'deficiencia'=>$alunosNota->deficiencia,
            ];

            $mediaBimestrais = MediaBimestral::where('turma_id',$turma->id)
                ->where('disciplina_id',$disciplina->id)
                ->where('aluno_id',$alunosNota->aluno_id)
                ->where('escola_id',1)
                ->where('anoletivo_id',1)
                ->orderBy('periodo_id','asc')
                ->get();

            $mediaAnual = $mediaBimestrais->avg('media');

            $mediaFinal = 0.0;

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['medias'] = $mediaBimestrais->toArray();

            $status = '';
            $recuperacao = 0.0;
            $conselho = 0.0;

            foreach ($mediaAnuais as $media_anual) {

                if ($media_anual->aluno_id == $alunosNota->aluno_id) {
                    if ($media_anual->media > 0){
                        $mediaAnual = $media_anual->media;
                    }
                    $recuperacao = $media_anual->recuperacao;
                    $conselho = $media_anual->conselho;

                    if ($conselho > 0) {
                        $mediaFinal = $conselho;

                    } else if ($recuperacao > 0){
                        $recuperacaoSalva = true;
                        $mediaFinal = $recuperacao;
                    } else if ($media_anual->media > 0){
                        $mediaFinal = $mediaAnual;
                    }
                    $status = $this->status($mediaFinal, $mediaEscolar);
                    break;
                }
            }

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_anual'] = formatar_media($mediaAnual);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['recuperacao'] = formatar_media($recuperacao);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['conselho'] =  formatar_media($conselho);

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_final'] =  formatar_media($mediaFinal);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['status'] = $status;

        }

        return view('diario.nota.criar_recuperacao', [
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodo_id' => $periodoTurmas->id,
            'listaMediaAlunos' => $listaMediaAlunos,
            'recuperacaoSalva' => $recuperacaoSalva,
            'mediaEscolar' => $mediaEscolar,
        ]);
    }
    public function status(float $media, float $mediaEscolar) : string{
        if ($media >= $mediaEscolar){
            return 'APROVADO';
        }else if ($media > 0 && $media <= $mediaEscolar){
            return 'REPROVADO';
        }
        return '';
    }

    public function listarConselho(Turma $turma, Disciplina $disciplina, int $periodo){

        $periodoTurmas = PeriodoTurma::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('ordem',$periodo)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->first();

        $mediaBimestral = MediaBimestral::join('alunos','alunos.id','=','media_bimestrals.aluno_id')
            ->join('turma_alunos','turma_alunos.aluno_id','=','media_bimestrals.aluno_id')
            ->select('turma_alunos.numero','alunos.nome','alunos.foto','alunos.inep','alunos.deficiencia','media_bimestrals.aluno_id','media_bimestrals.media','media_bimestrals.periodo_id','media_bimestrals.status')
            ->where('media_bimestrals.turma_id', $turma->id)
            ->where('media_bimestrals.disciplina_id', $disciplina->id)
            ->where('media_bimestrals.escola_id',1)
            ->where('media_bimestrals.anoletivo_id',1)
            ->orderBy('turma_alunos.numero','asc')
            ->get();

        $mediaAnuais = MediaAnual::where('turma_id',$turma->id)
            ->where('disciplina_id',$disciplina->id)
            ->where('escola_id',1)
            ->where('anoletivo_id',1)
            ->get();

        $mediaEscolar = SchoolsYears::where('school_id',1)->where('year',2021)->first()->school_average;

        $listaMediaAlunos = [];
        $conselhoSalvo = false;
        foreach ($mediaBimestral as $alunosNota){

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno'] = [
                'id'=>$alunosNota->aluno_id,
                'nome'=>$alunosNota->nome,
                'numero'=>$alunosNota->numero,
                'foto'=>$alunosNota->foto,
                'inep'=>$alunosNota->inep,
                'deficiencia'=>$alunosNota->deficiencia,
            ];

            $listaMediaAlunosTemp[$alunosNota->aluno_id]['medias'][] = [
                'periodo_id' => $alunosNota->periodo_id,
                'media' => number_format($alunosNota->media,1),
            ];

            $c = collect($listaMediaAlunosTemp[$alunosNota->aluno_id]['medias']);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['medias'] = $c->sortBy('periodo_id')->toArray();
            $mediaAnual = $c->avg('media');

            $status = '';

            $recuperacao = 0.0;
            $conselho = 0.0;
            $mediaFinal = 0.0;
            foreach ($mediaAnuais as $media_anual) {
                if ($media_anual->aluno_id == $alunosNota->aluno_id) {
                    $mediaAnual = $media_anual->media;
                    $recuperacao = $media_anual->recuperacao;
                    $conselho = $media_anual->conselho;

                    if ($conselho > 0) {
                        $conselhoSalvo = true;
                        $mediaFinal = $conselho;
                    } else if ($recuperacao > 0){
                        $mediaFinal = $recuperacao;
                    } else {
                        $mediaFinal = $mediaAnual;
                    }
                    $status = $this->status($mediaFinal, $mediaEscolar);
                    break;
                }
            }

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_anual'] = formatar_media($mediaAnual);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['recuperacao'] = formatar_media($recuperacao);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['conselho'] =  formatar_media($conselho);

            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['media_final'] =  formatar_media($mediaFinal);
            $listaMediaAlunos[$alunosNota->aluno_id]['aluno']['status'] = $status;

        }

        return view('diario.nota.criar_conselho', [
            'turma' => $turma,
            'disciplina' => $disciplina,
            'periodo_id' => $periodoTurmas->id,
            'listaMediaAlunos' => $listaMediaAlunos,
            'conselhoSalvo' => $conselhoSalvo,
            'mediaEscolar' => $mediaEscolar,
        ]);
    }

    public function teste($resuest, $model = null){
        echo "<pre>";
        print_r($resuest);
        print_r($model);
        exit;
    }
    public function cadastrar(Request $request, Turma $turma, Disciplina $disciplina, int $periodo_id){


            $periodo = PeriodoTurma::where('turma_id',$turma->id)
                ->where('disciplina_id',$disciplina->id)
                ->where('ordem',$periodo_id)
                ->where('escola_id',1)
                ->where('anoletivo_id',1)
                ->first();

            $nota_tipo = new NotaTipo();
            $notaTipo = $this->popular_nota_tipo($request, $nota_tipo, $turma, $disciplina, $periodo);
            if ($notaTipo->id > 0){
                $this->popular_notas($request, $notaTipo, $turma, $disciplina, $periodo);
                $msg = $this->message->success(title:'Parabéns', message:'Notas cadastrada com sucesso.');
                return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
            }

        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);

    }
    public function popular_nota_tipo(Request $request, NotaTipo $notaTipo, Turma $turma, Disciplina $disciplina, PeriodoTurma $periodoTurma){
        if ($request->acao == 'editar'){
            $notaTipo->data = $request->data;
            $notaTipo->tipo = $request->tipo;
            $notaTipo->save();
        }else{
            $notaTipo->data = $request->data;
            $notaTipo->tipo = $request->tipo;
            $notaTipo->escola_id = 1;
            $notaTipo->periodo_id = $periodoTurma->id;
            $notaTipo->turma_id = $turma->id;
            $notaTipo->disciplina_id = $disciplina->id;
            $notaTipo->anoletivo_id = 1;
            $notaTipo->save();
        }


        return $notaTipo;
    }
    public function popular_notas(Request $request, NotaTipo $notaTipo, Turma $turma, Disciplina $disciplina, PeriodoTurma $periodoTurma){

        $notas = $request->input('notas');
        if ($request->acao == 'editar') {
            foreach ($notas as $nota_id => $nota){
                $nova_nota = Nota::find($nota_id);
                $nova_nota->nota = $nota;
                $nova_nota->save();
            }

        }else {
            foreach ($notas as $aluno_id => $nota){
                $nova_nota = new Nota();
                $nova_nota->nota = $nota;
                $nova_nota->nota_tipo_id = $notaTipo->id;
                $nova_nota->periodo_id = $periodoTurma->id;
                $nova_nota->funcionario_id = 18;
                $nova_nota->aluno_id = $aluno_id;
                $nova_nota->turma_id = $turma->id;
                $nova_nota->disciplina_id = $disciplina->id;
                $nova_nota->escola_id = 1;
                $nova_nota->anoletivo_id = 1;
                $nova_nota->save();
            }
        }
    }

    public function editar(Request $request, Turma $turma, Disciplina $disciplina, int $periodo_id, int $notatipo){

        $periodo = PeriodoTurma::find($periodo_id);
        $nota_tipo = NotaTipo::find($notatipo);
        $notaTipo = $this->popular_nota_tipo($request, $nota_tipo, $turma, $disciplina, $periodo);
        if ($notaTipo->id > 0){
            $this->popular_notas($request, $notaTipo, $turma, $disciplina, $periodo);
            $msg = $this->message->success(title:'Parabéns', message:'Notas atualizadas com sucesso.');
            return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);
            //return back()->with('status', $msg);
        }

        $msg = $this->message->error(title:'Error', message:'Oops! Houve algum problema.');
        return redirect()->route('diario.notatipo.listarNotas',['turma'=>$turma,'disciplina' => $disciplina])->with('status',$msg);

    }

}
