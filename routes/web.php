<?php

//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Web\WebController;
//use App\Http\Controllers\Admin\LoginController;
//use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\Admin\SchoolController;
//use App\Http\Controllers\Admin\SchoolsYearsController;
//use App\Http\Controllers\Admin\GradeController;
//use App\Http\Controllers\Admin\DisciplinaController;
//use App\Http\Controllers\Admin\HorarioController;
//use App\Http\Controllers\Admin\TurmaController;
//use App\Http\Controllers\Admin\FuncionarioController;
//use App\Http\Controllers\Admin\ProfessorDisciplinasController;
//use App\Http\Controllers\Admin\TurmaDisciplinaController;
//use App\Http\Controllers\Admin\MapeamentoController;
//use App\Http\Controllers\Admin\AlunoController;
//use App\Http\Controllers\Admin\ResponsavelController;
//use App\Http\Controllers\Admin\TransferenciaController;
//use App\Http\Controllers\Admin\CalendarioEscolarController;
//use App\Http\Controllers\Admin\ProfessorHorarioController;
//use App\Http\Controllers\Admin\BibliotecaController;

use App\Http\Controllers\Diario\DiarioController;
//use App\Http\Controllers\Diario\ConteudoController;
//use App\Http\Controllers\Diario\ConteudoCampoController;
//use App\Http\Controllers\Diario\NotaTipoController;
//use App\Http\Controllers\Diario\NotaController;
//use App\Http\Controllers\Diario\MediaBimestralController;
//use App\Http\Controllers\Diario\MediaAnualController;
//use App\Http\Controllers\Diario\RecuperacaoController;
//use App\Http\Controllers\Diario\ConselhoController;
//use App\Http\Controllers\Diario\PlanoController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//

//Route::get('/', [WebController::class,'home'])->name("home");
//Route::get('/sobre', [WebController::class,'about'])->name("about");
//Route::get('/blog', [WebController::class,'home'])->name("blog");
//Route::get('/blog/{uri}', [WebController::class,'article'])->name("article");
//Route::get('/contato', [WebController::class,'contact'])->name("contact");

//Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'as'=>'admin.'], function (){
//
//    Route:Route::get('/home', [LoginController::class, "home"])->name('home');
//
//    Route::get('/docente/login',  [LoginController::class,'showLoginTeacher'])->name("showLoginTeacher");
//    Route::get('/discente/login', [LoginController::class,'showLoginStudent'])->name("showLoginStudent");
//    // Via ajax
//    Route::post('/docente/autenticar', [LoginController::class,'loginTeacher'])->name("loginTeacher");
//    Route::post('/discente/autenticar', [LoginController::class,'loginStudent'])->name("loginStudent");
//
//    Route::post('/logoutTeacher', [LoginController::class,'logoutTeacher'])->name("logoutTeacher");
//    Route::post('/logoutStudent', [LoginController::class,'logoutStudent'])->name("logoutStudent");
//});
/*
//Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'as'=>'admin.'], function (){
//
//    /** Rotas protegidas */
//    Route::middleware(['auth'])->group(function (){
//        /** Dashboard home */
//        Route::get('/home', [LoginController::class, "home"])->name('home');
//
//        /** Usuarios */
//        Route::get('/usuarios', [UserController::class,'index'])->name('user.index');
//        Route::post('/usuarios/cadastrar', [UserController::class,'cadastrar'])->name('user.cadastrar');
//        Route::get('/usuarios/{id}/editar', [UserController::class,'edit'])->name('user.edit');
//        Route::post('/usuarios/{id}', [UserController::class,'update'])->name('user.update');
//        Route::get('/usuarios/{id}/deletar', [UserController::class,'destroy'])->name('user.destroy');
//
//        /** gerar pdf do usuário */
//        Route::get('/usuario/{id}/pdf', [UserController::class, 'pdf'])->name('user.pdf');
//        Route::get('/usurario/{id}/excel', [UserController::class,'excel'])->name('user.excel');
//
//        /** Escola */
//        Route::get('/escolas/{id}/deletar', [SchoolController::class,'destroy'])->name('school.destroy');
//        Route::resource('/escolas','\App\Http\Controllers\Admin\SchoolController')->except('destroy');
//
//        /** Ano Letivo */
//        Route::get('/schoolsyears/{id}/destroy', [SchoolsYearsController::class,'destroy'])->name('schoolsyears.destroy');
//        Route::resource('/schoolsyears','\App\Http\Controllers\Admin\SchoolsYearsController')->except('destroy');
//
//        /** Add componentes curriculares nas grades */
//        Route::get('/grades/{grade}/disciplinas', [GradeController::class,'listarGradeDisciplinas'])->name('grade.disciplinas.listar');
//        Route::post('/grades/{grade}/disciplinas/criar', [GradeController::class,'criarGradeDisciplinas'])->name('grade.disciplinas.criar');
//        Route::get('/grades/{grade}/gradeDisciplina/{id}/deletar', [GradeController::class,'deletarGradeDisciplina'])->name('grade.disciplinas.deletar');
//
//        /** Grade curriculares */
//        Route::get('/grades/{id}/deletar', [GradeController::class,'destroy'])->name('grades.destroy');
//        Route::resource('/grades','\App\Http\Controllers\Admin\GradeController')->except('destroy');
//
//        /** Componentes curriculares */
//        Route::get('/disciplinas/{id}/deletar', [DisciplinaController::class,'destroy'])->name('disciplinas.destroy');
//        Route::resource('/disciplinas','\App\Http\Controllers\Admin\DisciplinaController')->except('destroy');
//
//        /** Horários */
//        Route::get('/horarios/{id}/deletar', [HorarioController::class,'destroy'])->name('horarios.destroy');
//        Route::resource('/horarios','\App\Http\Controllers\Admin\HorarioController')->except('destroy');
//
//        /** Turmas */
//        Route::get('/turmas/{id}/deletar', [TurmaController::class,'destroy'])->name('turmas.destroy');
//        Route::get('/turmas/{turma}/alunos/{id}/deletar', [TurmaController::class,'destroyTurmaAluno'])->name('turmas.alunos.destroy');
//        Route::post('/turmas/{turma}/alunos/numerar', [TurmaController::class,'numerarAlunos'])->name('turmas.alunos.numerar');
//        Route::get('/turmas/{turma}/alunos/turma_alunos', [TurmaController::class,'turmaAlunos'])->name('turmas.alunos.listar');
//        Route::post('/turmas/{turma}/alunos/cadastrar', [TurmaController::class,'cadastrarTurmaAlunos'])->name('turmas.alunos.cadastrar');
//        Route::resource('/turmas','\App\Http\Controllers\Admin\TurmaController')->except('destroy');
//
//
//        /** Funcionarios */
//        Route::get('/funcionarios/{id}/ativar', [FuncionarioController::class,'ativar'])->name('funcionarios.ativar');
//        Route::get('/funcionarios/{id}/deletar', [FuncionarioController::class,'destroy'])->name('funcionarios.destroy');
//        Route::resource('/funcionarios','\App\Http\Controllers\Admin\FuncionarioController')->except('destroy');
//
//        /** Alunos */
//        Route::get('/alunos/{aluno}/responsavels', [AlunoController::class,'responsavels'])->name('alunos.responsavels');
//        Route::get('/alunos/listagem', [AlunoController::class,'listagem'])->name('alunos.listar');
//        Route::get('/alunos/{id}/deletar', [AlunoController::class,'destroy'])->name('alunos.destroy');
//        Route::resource('/alunos','\App\Http\Controllers\Admin\AlunoController')->except('destroy');
//
//        /** Responsaveis */
//        Route::get('/responsavels/aluno/{aluno}/responsavel/{id}/deletar', [ResponsavelController::class,'destroy'])->name('responsavels.destroy');
//        Route::post('/responsavels/{aluno}/cadastrar', [ResponsavelController::class,'cadastrar'])->name('responsavels.cadastrar');
//        Route::resource('/responsavels','\App\Http\Controllers\Admin\ResponsavelController')->except('destroy');
//
//        /** Professor disciplinas */
//        Route::get('/professorDisciplinas/index', [ProfessorDisciplinasController::class,'index'])->name('professor.disciplinas.index');
//        Route::post('/professorDisciplinas/listar', [ProfessorDisciplinasController::class,'listar'])->name('professor.disciplinas.listar');
//        Route::post('/professorDisciplinas/cadastrar', [ProfessorDisciplinasController::class,'cadastrar'])->name('professor.disciplinas.cadastrar');
//        Route::get('/professorDisciplinas/{id}/deletar', [ProfessorDisciplinasController::class,'destroy'])->name('professor.disciplinas.destroy');
//
//        /** Turma disciplina */
//        Route::get('/turmaDisciplinas/index', [TurmaDisciplinaController::class,'index'])->name('turma.disciplinas.index');
//        Route::post('/turmaDisciplinas/listar', [TurmaDisciplinaController::class,'listar'])->name('turma.disciplinas.listar');
//        Route::post('/turmaDisciplinas/cadastrar', [TurmaDisciplinaController::class,'cadastrar'])->name('turma.disciplinas.cadastrar');
//        Route::get('/turmaDisciplinas/{id}/deletar', [TurmaDisciplinaController::class,'destroy'])->name('turma.disciplinas.destroy');
//
//        /** Funcionarios */
//        Route::get('/mapeamento/index', [MapeamentoController::class,'index'])->name('mapeamento.index');
//        Route::post('/mapeamento/cadastrar', [MapeamentoController::class,'cadastrar'])->name('mapeamento.cadastrar');
//        Route::post('/mapeamento/disciplinas/listar', [MapeamentoController::class,'disciplinas'])->name('mapeamento.disciplinas.listar');
//        Route::post('/mapeamento/professores/listar', [MapeamentoController::class,'professores'])->name('mapeamento.professores.listar');
//        Route::post('/mapeamento/listar', [MapeamentoController::class,'listar'])->name('mapeamento.listar');
//        Route::get('/mapeamento/{id}/deletar', [MapeamentoController::class,'destroy'])->name('mapeamento.destroy');
//
//        /** Tranferência do aluno */
//        Route::get('/transferencia/listar', [TransferenciaController::class,'listar'])->name('transferencia.listar');
//        Route::post('/transferencia/cadastrar', [TransferenciaController::class,'cadastrar'])->name('transferencia.cadastrar');
//        Route::get('/transferencia/{transferencia}/editar', [TransferenciaController::class,'editar'])->name('transferencia.editar');
//        Route::get('/transferencia/{id}/deletar', [TransferenciaController::class,'deletar'])->name('transferencia.deletar');
//
//        /** Calendário escolar */
//        Route::get('/calendario/mostrar', [CalendarioEscolarController::class,'mostrar'])->name('calendario.mostrar');
//        Route::get('/calendario/eventos', [CalendarioEscolarController::class,'eventos'])->name('calendario.eventos');
//        Route::post('/calendario/cadastrar', [CalendarioEscolarController::class,'cadastrar'])->name('calendario.cadastrar');
//        Route::post('/calendario/eventoDrop', [CalendarioEscolarController::class,'eventoDrop'])->name('calendario.eventoDrop');
//        Route::post('/calendario/eventoResize', [CalendarioEscolarController::class,'eventoResize'])->name('calendario.eventoResize');
//        Route::post('/calendario/deletar', [CalendarioEscolarController::class,'deletar'])->name('calendario.deletar');
//
//        /** Professor Horário */
//        Route::get('/professorhorario/index', [ProfessorHorarioController::class,'index'])->name('professor.horario.index');
//
//        /** Biblioteca */
//        Route::get('/biblioteca/index', [BibliotecaController::class,'index'])->name('biblioteca.index');
//        Route::get('/biblioteca/tabelaPeriodica', [BibliotecaController::class,'tabelaPeriodica'])->name('biblioteca.tabelaPeriodica');
//
//    });
//    //Route::resource('/usuarios','\App\Http\Controllers\Admin\UserController');
//    /** Formulário ed login */
//    Route::get('/login',  [LoginController::class,'showLogin'])->name("showLogin");
//    Route::post('/autenticar', [LoginController::class,'auth'])->name("login.do");
//    Route::get('/logout', [LoginController::class,'logout'])->name("logout");
//});

Route::group(['namespace'=>'Diario', 'prefix'=>'diario', 'as'=>'diario.'], function (){

    /** Rotas protegidas */
   // Route::middleware(['auth'])->group(function (){
        /** Dashboard home professor */
        Route::get('/home', [DiarioController::class, "home"])->name('home');
        /*
        Route::post('/escola/listaAnoleFuncoes', [DiarioController::class, "listaAnoleFuncoes"])->name('anoletivo.funcoes.listar');
        Route::post('/escola/ativarEscola', [DiarioController::class, "ativarEscola"])->name('escola.ativar');
        Route::get('/conteudo/turma/{turma}/disciplina/{disciplina}', [DiarioController::class, "conteudo"])->name('conteudo');
        /** Conteudo */
    /*
        Route::post('/conteudo/turma/{turma}/disciplina/{disciplina}/vermais', [DiarioController::class, "vermais"])->name('conteudo.vermais');
        Route::post('/conteudo/cadastrar/{turma}/{disciplina}', [ConteudoController::class, "cadastrar"])->name('conteudo.cadastrar');
        Route::get('/conteudo/listar/{id}', [ConteudoController::class, "listar"])->name('conteudo.listar');
        Route::get('/conteudo/destroy/{id}', [ConteudoController::class, "destroy"])->name('conteudo.destroy');
        Route::get('/conteudo/turma/{turma}/disciplina/{disciplina}/copiarConteudo', [ConteudoController::class, "copiarConteudo"])->name('conteudo.copiarConteudo');
        Route::get('/conteudo/turma/{turma}/disciplina/{disciplina}/copiarHabilidades', [ConteudoController::class, "copiarHabilidades"])->name('conteudo.copiarHabilidades');
*/
        /** Conteudo */
    /**
        Route::post('/conteudoCampo/turma/{turma}/disciplina/{disciplina}/vermais', [DiarioController::class, "vermais"])->name('conteudo.vermais');
        Route::post('/conteudoCampo/cadastrar/{turma}/{disciplina}', [ConteudoCampoController::class, "cadastrar"])->name('conteudo.campo.cadastrar');
        Route::get('/conteudoCampo/listar/{id}', [ConteudoCampoController::class, "listar"])->name('conteudo.listar');
        Route::get('/conteudoCampo/destroy/{id}', [ConteudoCampoController::class, "destroy"])->name('conteudo.destroy');
        Route::get('/conteudoCampo/turma/{turma}/disciplina/{disciplina}/copiarConteudo', [ConteudoCampoController::class, "copiarConteudo"])->name('conteudo.copiarConteudo');
        Route::get('/conteudoCampo/turma/{turma}/disciplina/{disciplina}/copiarHabilidades', [ConteudoCampoController::class, "copiarHabilidades"])->name('conteudo.copiarHabilidades');
*/
        /** Data das Notas */
        //Route::get('/notatipo/turma/{turma}/disciplina/{disciplina}/listarNotas', [NotaTipoController::class, "listarNotas"])->name('notatipo.listarNotas');
        /** Notas */
    /*
        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/listarCriar', [NotaController::class, "listarCriar"])->name('nota.criar.listar');
        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/listarMedia', [NotaController::class, "listarMedia"])->name('nota.media.listar');
        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/listarMediaAnual', [NotaController::class, "listarMediaAnual"])->name('nota.media.anual.listar');
        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/listarRecuperacao', [NotaController::class, "listarRecuperacao"])->name('nota.media.recuperacao.listar');
        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/listarConselho', [NotaController::class, "listarConselho"])->name('nota.media.conselho.listar');

        Route::get('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/notatipo/{notatipo}/notaListarEditar', [NotaController::class, "listarEditar"])->name('nota.listar.editar');
        Route::post('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/cadastrar', [NotaController::class, "cadastrar"])->name('nota.cadastrar');
        Route::put('/nota/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/notatipo/{notatipo}/editar', [NotaController::class, "editar"])->name('nota.editar');

        Route::post('/mediaBimestral/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/salvar', [MediaBimestralController::class, "salvar"])->name('media.salvar');
        Route::post('/mediaBimestral/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/limpar', [MediaBimestralController::class, "limpar"])->name('media.limpar');
        Route::get('/mediaBimestral/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/fechar', [MediaBimestralController::class, "fechar"])->name('media.fechar');

        Route::post('/mediaAnual/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/salvar', [MediaAnualController::class, "salvar"])->name('media.anual.salvar');
        Route::get('/mediaAnual/turma/{turma}/disciplina/{disciplina}/periodo/{periodo}/limpar', [MediaAnualController::class, "limpar"])->name('media.anual.limpar');
        Route::get('/mediaAnual/turma/{turma}/disciplina/{disciplina}/fechar', [MediaAnualController::class, "fechar"])->name('media.anual.fechar');

        Route::post('/recuperacao/turma/{turma}/disciplina/{disciplina}/salvar', [RecuperacaoController::class, "salvar"])->name('media.recuperacao.salvar');
        Route::get('/recuperacao/turma/{turma}/disciplina/{disciplina}/limpar', [RecuperacaoController::class, "limpar"])->name('media.recuperacao.limpar');
        Route::get('/recuperacao/turma/{turma}/disciplina/{disciplina}/fechar', [RecuperacaoController::class, "fechar"])->name('media.recuperacao.fechar');

        Route::post('/conselho/turma/{turma}/disciplina/{disciplina}/salvar', [ConselhoController::class, "salvar"])->name('media.conselho.salvar');
        Route::get('/conselho/turma/{turma}/disciplina/{disciplina}/limpar', [ConselhoController::class, "limpar"])->name('media.conselho.limpar');
        Route::get('/conselho/turma/{turma}/disciplina/{disciplina}/fechar', [ConselhoController::class, "fechar"])->name('media.conselho.fechar');

        //Route::get('/plano/turma/{turma}/disciplina/{disciplina}/listar', [PlanoController::class, "listar"])->name('plano.listar');
        //Route::get('/plano/listarTurmas', [PlanoController::class, "listarTurmas"])->name('plano.listarTurmas');
*/

    //});
    //Route::resource('/usuarios','\App\Http\Controllers\Admin\UserController');
    /** Formulário ed login */
    //Route::get('/login',  [LoginController::class,'showLogin'])->name("showLogin");
    //Route::post('/autenticar', [LoginController::class,'auth'])->name("login.do");
    //Route::get('/logout', [LoginController::class,'logout'])->name("logout");
});

//Route::group(['namespace'=>'Student', 'prefix'=>'aluno', 'as'=>'student.'], function (){
//
//    Route:Route::get('/home', [LoginController::class, "home"])->name('home');
//    Route::get('/login',  [LoginController::class,'showLogin'])->name("showLogin");
//    // Via ajax
//    Route::post('/autenticar', [LoginController::class,'auth'])->name("login.do");
//    Route::get('/logout', [LoginController::class,'logout'])->name("logout");
//
//
//
//});





