<?php

namespace App\Http\Controllers\Diario;

use App\Http\Controllers\Controller;
use App\Models\Admin\Disciplina;
use App\Models\Admin\Turma;
use App\Models\Diario\Conteudo;
use App\Models\Diario\Falta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function faltas(Conteudo $conteudo, Turma $turma, Disciplina $disciplina ){

        $matriculas = DB::table('matriculas')
            ->select('matriculas.id', 'matriculas.numero','matriculas.serie', 'matriculas.aluno_id','matriculas.data','alunos.aluno_nome','alunos.aluno_inep')
            ->leftJoin('alunos','alunos.id','matriculas.aluno_id')
            ->where('matriculas.turma_id', $turma->id)
            ->where('matriculas.escola_id', $turma->escola_id)
            ->where('matriculas.anoletivo_id', $turma->anoletivo_id)
            ->orderBy('numero')
            ->get();

        $series = [];
        $multisseriada = false;
        if ($turma->atendimento == 'Multisseriada Infantil'){
            $series = [10 => 'Infantil I',11 => 'Infantil II', 12 => 'Infantil III' ];
            $multisseriada = true;
        }else if ($turma->atendimento == 'Multisseriada Fundamental'){
            $series = [1 => '1° Ano', 2 => '2º Ano', 3 => '3º Ano',4 => '4º Ano',5 => '5º Ano',6 => '6º Ano',7 => '7º Ano', 8 => '8º Ano',9 => '9º Ano'];
            $multisseriada = true;
        }else if ($turma->atendimento == 'Multisseriada Infantil e Fundamental'){
            $series = [1 => '1° Ano', 2 => '2º Ano', 3 => '3º Ano',4 => '4º Ano',5 => '5º Ano',6 => '6º Ano',7 => '7º Ano', 8 => '8º Ano',9 => '9º Ano',10 => 'Infantil I',11 => 'Infantil II', 12 => 'Infantil III' ];
            $multisseriada = true;
        }

        $matriculas_lista = [];
        foreach ($matriculas as $matricula){

            $faltas = Falta::where('turma_id', $turma->id)
                ->where('disciplina_id', $disciplina->id)
                ->where('aluno_id', $matricula->aluno_id)
                ->where('conteudo_id', $conteudo->id)
                ->where('escola_id',2)
                ->where('anoletivo_id', 105)
                ->first();

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
                'hora_aula' => $conteudo->hora_aula,
                'falta' => $faltas->falta ?? 0
            ];

            array_push($matriculas_lista, $temp);
        }

        return view('diario.faltas.faltas',[
                'matriculas' => $matriculas_lista,
                'turma' => $turma,
                'series' => $series,
                'multisseriada' => $multisseriada,
                'disciplina' => $disciplina,
                'conteudo' => $conteudo,
            ]
        );
    }

    public function salvarFaltas(Request $request)
    {
        $dados = $request->faltas;

        $faltas = Falta::where('turma_id', $request->turma_id)
            ->where('disciplina_id', $request->disciplina_id)
            ->where('conteudo_id', $request->conteudo_id)
            ->where('escola_id', 2)
            ->where('anoletivo_id', 105)
            ->get();


        foreach ($dados as $dado){
            if (!empty($faltas)) {
                foreach ($faltas as $falta) {
                    if ($dado['aluno_id'] == $falta->aluno_id) {
                        $falta->delete();
                    }
                }
            }
            $falta = new Falta();
            if ($dado['falta'] > 0) {
                $this->populationFalta($request, $falta, $dado);
            }
        }

        $conteudo = Conteudo::find($request->conteudo_id);
        $conteudo->lancou_falta = 'S';
        $conteudo->save();
        $request->session()->flash('status', 'As faltas foram salvas com sucesso!');

        return redirect()->back();
//        return redirect()->action(
//            [ConteudoController::class,'conteudo'],['conteudo' => $request->conteudo_id,'turma' => $request->turma_id, 'disciplina' =>  $request->disciplina_id]
//        );
        //return redirect()->route('diario.conteudo.turma.disciplina.faltas',['conteudo' => $request->conteudo_id,'turma' => $request->turma_id, 'disciplina' =>  $request->disciplina_id]);
    }
    public function populationFalta(Request $request, Falta $falta, $dado){
        $falta->aluno_id = $dado['aluno_id'];
        $falta->aluno_numero =  $dado['numero'];
        $falta->falta =  $dado['falta'];
        $falta->professor_id = 12;
        $falta->turma_id =  $request->turma_id;
        $falta->disciplina_id =  $request->disciplina_id;
        $falta->conteudo_id =  $request->conteudo_id;
        $falta->escola_id =  2;
        $falta->anoletivo_id =  105;

        $falta->save();
    }
    public function ultimoConteudo(Turma $turma, Disciplina $disciplina){

        $conteudo = Conteudo::where('turma_id', $turma->id)
            ->where('disciplina_id', $disciplina->id)
            ->where('escola_id',2)
            ->where('anoletivo_id', 105)
            ->orderBy('id','DESC')
            ->first();

        return response()->json($conteudo);

    }

    public function conteudo(Turma $turma,Disciplina $disciplina){


        $conteudos = Conteudo::where('turma_id', $turma->id)
            ->where('disciplina_id', $disciplina->id)
            ->where('escola_id',2)
            ->where('anoletivo_id', 105)
            ->orderBy('data','DESC')
            ->get();

        $conteudo1 = ['conteudos' => $conteudos->where('periodo_id', 1)->take(3), 'total' => $conteudos->where('periodo_id', 1)->sum('hora_aula')];
        $conteudo2 = ['conteudos' => $conteudos->where('periodo_id', 2)->take(3), 'total' => $conteudos->where('periodo_id', 2)->sum('hora_aula')];
        $conteudo3 = ['conteudos' => $conteudos->where('periodo_id', 3)->take(3), 'total' => $conteudos->where('periodo_id', 3)->sum('hora_aula')];
        $conteudo4 = ['conteudos' => $conteudos->where('periodo_id', 4)->take(3), 'total' => $conteudos->where('periodo_id', 4)->sum('hora_aula')];

        $plataformas = [
            'Google Classroom' => 'google-classroom.svg',
            'Grupos WhatsApp' => 'whatsapp.svg',
            'YouTube' => 'youtube.svg',
            'Google Meet' => 'meet.svg',
            'Entrega de materiais impressos' => 'math.svg',
            '' => 'school.svg'
        ];
        return view('diario.conteudo.conteudo',
            [
                'turma'=>$turma,
                'disciplina' => $disciplina,
                'plataformas' => $plataformas,
                'conteudos1' => $conteudo1,
                'conteudos2' => $conteudo2,
                'conteudos3' => $conteudo3,
                'conteudos4' => $conteudo4,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->converterDataBanco($request->data);
        $hoje = (new \DateTime('NOW'))->format('Y-m-d');
        if ($data > $hoje){
            $json['data'] = $this->message->error(title:'error', message: 'Oops! A data selecionada é maior que a de hoje.')->render();
            return response()->json($json);
        }

        $conteudo = Conteudo::find($request->id);
        if (!empty($conteudo)) {

            $con = Conteudo::where('data', $this->converterDataBanco($request->data))
                ->where('id', '<>',$conteudo->id)
                ->where('turma_id', $request->turma_id)
                ->where('disciplina_id', $request->disciplina_id)
                ->where('escola_id', 2)
                ->where('anoletivo_id', 105)
                ->first();

            if (!empty($con)) {
                if ($con->data == $data) {
                    $json['data'] = $this->message->error(title: 'error', message: 'Oops! Já existe um conteúdo para essa data.')->render();
                    return response()->json($json);
                }
            }

            if (!$this->population($request, $conteudo)){
                $json['data'] = $this->message->error(title:'error', message: 'Oops! Erro ao cadastrar o conteúdo.')->render();
                return response()->json($json);
            }
            $mensagem = 'Registro atualizado com sucesso.';
        }else{

            $conteudo = Conteudo::where('data', $this->converterDataBanco($request->data))
                ->where('turma_id', $request->turma_id)
                ->where('disciplina_id', $request->disciplina_id)
                ->where('escola_id', 2)
                ->where('anoletivo_id', 105)
                ->first();

            if (!empty($conteudo)){
                $json['data'] = $this->message->error(title:'error', message: 'Oops! Data repetida!.')->render();
                return response()->json($json);
            }

            $conteudo = new Conteudo();
            if (!$this->population($request, $conteudo)){
                $json['data'] = $this->message->error(title:'error', message: 'Oops! Erro ao cadastrar o conteúdo.')->render();
                return response()->json($json);
            }
            $mensagem = 'Registro salvo com sucesso.';
        }

        $json = ['data' => $this->message->success(title:'success', message: $mensagem)->render(),'conteudo' => $conteudo];
        return response()->json($json);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function  listar(Request $request){
        $conteudos = Conteudo::where('turma_id', $request->turma_id)
            ->where('disciplina_id', $request->disciplina_id)
            ->where('periodo_id', $request->periodo_id)
            ->where('escola_id',2)
            ->where('anoletivo_id', 105)
            ->orderBy('data','DESC')
            ->limit(3)
            ->offset($request->offset)
            ->get();
        return response()->json($conteudos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conteudo = Conteudo::find($id);
        $conteudo->data = (new \DateTime($conteudo->data))->format('d/m/Y');
        return response()->json($conteudo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conteudo = Conteudo::find($id);
        if (!$conteudo->delete()){
            $json['data'] = $this->message->error(title:'error', message: 'Erro ao deletar registro.')->render();
            return response()->json($json);
        }

        $json['data'] = $this->message->success(title:'success', message: 'Conteúdo deletado com sucesso.')->render();
        return response()->json($json);
    }
    public function population(Request $request, Conteudo $conteudo): Conteudo{
        $conteudo->data_conteudo = $request->data;
        $conteudo->hora_aula = $request->hora_aula;
        $conteudo->tipo_aula = $request->tipo_aula;
        $conteudo->plataforma = $request->plataforma;
        $conteudo->conteudo = $request->conteudo;
        $conteudo->periodo_id = $request->periodo_id;
        $conteudo->turma_id = $request->turma_id;
        $conteudo->disciplina_id = $request->disciplina_id;
        $conteudo->professor_id = 12;
        $conteudo->escola_id = 2;
        $conteudo->anoletivo_id = 105;
        $conteudo->save();
        $conteudo->data = $request->data;
        if (!$conteudo->plataforma) {
            $conteudo->plataforma = '';
        }
        return $conteudo;
    }
    private function converterDataBanco($value){
        list($day,$month, $year) = explode("/", $value);
        return (new \DateTime("{$year}-{$month}-{$day}"))->format('Y-m-d');
    }

}
