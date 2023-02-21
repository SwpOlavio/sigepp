@extends('diario.dash.dash')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <style>
            .texto{
                font-size: 1.15rem;
            }
            .modal-fullscreen2{
                height:100%;
            }
            .modal-fullscreen2 .modal-content{
                max-height: 100%;
            }
            .modal-fullscreen2 .modal-footer,.modal-fullscreen .modal-header{
                border-radius:0
            }
            .modal-fullscreen2 .modal-body{

            }
            .modal-alunos-notas{
                height: calc(100vh - 28rem);
                overflow-y: auto;

            }
            .modal-alunos-medias{
                height: calc(100vh - 35rem);
                overflow-y: auto;
            }

            @media (max-width: 576px) {
                .texto {
                    font-size: calc(1.275rem + .3vw) !important
                }
            }

        </style>
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">


            <!--begin::Products-->
            <div class="card card-flush mb-5">
                <!--begin::Card header-->
                <div class="card-header  pt-8 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title d-flex flex-wrap flex-sm-nowrap ">
                        <div class="d-flex flex-wrap flex-sm-nowrap ">
                            <!--begin::Image-->
                            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-40px h-40px w-lg-100px h-lg-100px me-7 mb-4">
                                <img class="mw-50px mw-lg-50px" src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="image">
                            </div>
                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">UE Janoca Maciel</a>
                                            <span class="badge badge-light-primary me-auto">2021</span>
                                        </div>
                                        <div class="d-flex flex-wrap  fs-5 "><span class="text-gray-900 fw-bolder "># Turma: </span><span class="text-gray-800 fw-bold ">Turma B</span></div>
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5">Componente: <span class="badge badge-lg badge-light-danger ">{{$disciplina->nome}}</span></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </div>
                    <div class="d-flex flex-wrap flex-sm-nowrap d-none d-sm-block">
                        <!--begin::Menu-->
                        <div class="me-0">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                        Relatório
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Notas anuais
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">
                                        Alunos ABM

                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1"></i>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Alunos ACM
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Plans
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Billing
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Statements
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                    <!--end::Input-->

                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">
                            Recuring
                        </span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">
                                        Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::PARA CELULAR-->
                    <div class="d-flex justify-content-center flex-nowrap d-block d-sm-none">
                        <div class="me-1">
                            <a href="{{route('diario.mediaanual.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn   btn-success mb-3 ">Média</a>
                        </div>
                        <div class="me-1">
                            <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn  btn-warning mb-3 ">Recuperar</a>
                        </div>
                        <div class="me-1">
                            <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn  btn-info mb-3 ">Concelho</a>
                        </div>
                    </div>
                    <!--begin::PARA COMPUTADOR-->
                    <div class="d-none d-sm-flex flex-row justify-content-center flex-nowrap  ">
                            <div class="me-1">
                                <a href="{{route('diario.mediaanual.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn   btn-light-success mb-3 ">Média</a>
                            </div>
                            <div class="me-1">
                                <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn  btn-light-warning mb-3 ">Recuperar</a>
                            </div>
                            <div class="me-1">
                                <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn  btn-light-info mb-3 ">Concelho</a>
                            </div>
                            <div class="me-1">
                                <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn  btn-light-danger mb-3 ">Encerrar</a>
                            </div>

                    </div>
                </div>
                <!--end::Card body-->


            </div>
            <!--end::Informações-->
            <!--end::Informações-->
            <form action="{{route('diario.conteudo.faltas.salvarFaltas')}}" id="formulario_bim1" method="post">
                @csrf
                <div class="row g-5 g-xl-5 ">
                    <div class="col-xl-6">
                        <!--begin::List Widget 4-->
                        <div class="card  card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">1° Bimestre</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Lançamento de notas.</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin:: Se o primeiro bimestre está salvo-->
                                        <button type="button" {{$mediasSalvas->get(0)['salvo'] ? "disabled='true'":""}} data-periodo_id="{{$periodos[0]->id}}"  class="btn btn-primary me-3 desativar"  data-media-filter="notabim"
                                                onclick="Nota.getPeriodo(this)" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">Nota</button >

                                        <button {{$mediasSalvas->get(0)['salvo'] ? "disabled='true'":""}}  data-periodo_id="{{$periodos[0]->id}}" data-btn="1" data-media-filter="mediabim" class="bt1 btn btn-danger">
                                            <span class="indicator-label">Média</span>
                                            <span class="indicator-progress">Aguarde
									        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-flex flex-column card-body justify-content-between pt-5">
                                <!--begin::Item-->
                                    <div id="b1">
                                        @if(!empty($bimestre1))
                                        @foreach($bimestre1 as $bimestre)
                                                <div class="d-flex align-items-sm-center mb-7 item ">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-primary">

														<span class="svg-icon svg-icon-primary svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"/>
                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"/>
                                                        </svg>
                                                        </span>

													</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{ $bimestre->tipo }}</a>
                                                            <span class="text-gray-700 fw-bold d-block fs-7">{{ $bimestre->data}}</span>
                                                        </div>
                                                        <div class="d-flex align-items-center me-6" id="painel">
                                                            <button type="button" {{$mediasSalvas->get(0)['salvo'] ? "disabled='true'":""}} onclick='Nota.getNotas({{ collect($bimestre)}}, this.parentNode.parentNode.parentNode)'  class="editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">
                                                                <i class="fa-solid fa-pen fs-6"></i>
                                                            </button>
                                                            <button type="button" {{$mediasSalvas->get(0)['salvo'] ? "disabled='true'":""}} onclick='Nota.deletar({{ $bimestre->tipo_nota_id }}, this.parentNode.parentNode.parentNode)' class="remover btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                                <i class="fa-solid fa-trash fs-6"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>

                                        @endforeach
                                        @endif
                                    </div>
                                <div>
                                <div class="separator separator-content my-4"><span class="w-250px fw-bold">Mais opções</span></div>
                                <div class="separator separator-dashed separator-content  mt-12 mb-5">
                                    <button class="btn btn-icon me-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Baixar Relatório"><i class="las la-print text-warning fs-1 "></i></button>
                                    <button class="btn btn-icon me-5 d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Bimestre Fechado"><i class="las la-lock-open text-success fs-1"></i></button>
                                    <button class="btn btn-icon me-5 " data-bs-toggle="tooltip" data-bs-placement="top" title="Fechar Bimestre"><i class="las la-lock text-danger fs-1 "></i></button>
                                    <button class="btn btn-icon me-5" data-btn-filter="visualizarmediaBim" data-periodo_id="{{$periodos[0]->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar notas"><i class="las la-file-alt text-info fs-1"></i></button>
                                    <button class="btn btn-icon" {{!$mediasSalvas->get(0)['salvo'] ? "disabled='disabled'":""}} data-btn-filter="limparmediabim" data-periodo_id="{{$periodos[0]->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Limpar Média"><i class="bi bi-eraser-fill text-primary fs-1"></i></button>
                                </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>

                </div>
            </form>

            <div class="my-2">
                <a href="{{ route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn d-block d-sm-none   btn-danger mb-3">Encerrar</a>
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
        <!--begin::Modal Nota-->
        <div class="modal fade " id="kt_modal_nota" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-lg modal-fullscreen2">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end" >
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body mx-xl-10 pt-0 pb-0">
                        <div>
                            <input type="hidden" name="turma_id"  value="{{$turma->id}}"/>
                            <input type="hidden" name="disciplina_id"  value="{{$disciplina->id}}"/>
                            <input type="hidden" class="link-primary fw-bold" id="periodo" value="0"/>
                            <input type="hidden" class="link-primary fw-bold" id="tipo_nota_id" value="0"/>
                            <input type="hidden" id="medias_salvas"  value="{{$mediasSalvas ? $mediasSalvas : 0}}"/>
                        </div>
                        <form  id="formulario-notas" method="post">
                            <!--begin::Heading-->
                            <div class="text-center mb-1">
                                <!--begin::Title-->
                                <h1 class="mb-2" id="titulo-notas">Cadastrar notas</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex justify-content-center">
                                    <div class="text-muted fw-semibold fs-5">Turma B,</div>
                                    <div class="text-muted fw-semibold fs-5">Matematica,</div>
                                    <div class="text-muted fw-semibold fs-5">Matutino,</div>
                                    <div class="text-primary fw-bold fs-5">1° Bimestre</div>
                                </div>

                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="">
                                <!--begin::Input group-->
                                <div class="row g-5">
                                    <!--begin::Col-->
                                    <a href=""></a>  <!--tag "a" para pegar o focus e resolver o problema do calendario-->
                                    <div class="col-6 col-sm-6 fv-row ">

                                        <label class="required texto fw-bold mb-1">Data da nota</label>
                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-primary position-absolute mx-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                                      <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                    </svg>
                                                </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-solid ps-12 text-gray-800" placeholder="Selecione" name="data_nota" id="data_nota"/>
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-6 col-sm-6 fv-row pb-2">
                                        <label class="required texto d-none d-sm-block fw-bold mb-1">Tipo de Avaliação</label>
                                        <label class="required texto d-block d-sm-none fw-bold mb-1">T. de Avaliação</label>
                                        <select class="form-select form-select-solid"  data-dropdown-parent="#kt_modal_nota"  data-placeholder="Selecione" name="tipo" id="tipo_nota">
                                            <option ></option>
                                            <option selected data-imagem='<span class="svg-icon svg-icon-primary svg-icon-2 me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
                                                </svg>
                                                </span>' value="Trabalho">Trabalho</option>
                                            <option value="Prova" data-imagem='<span class="svg-icon svg-icon-danger svg-icon-2 me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
                                                </svg>
                                                </span>'>Prova</option>
                                            <option value="Recuperação" data-imagem='<span class="svg-icon svg-icon-success svg-icon-2 me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
                                                </svg>
                                                </span>'>Recuperação</option>
                                            <option value="Conselho" data-imagem='<span class="svg-icon svg-icon-warning svg-icon-2 me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
                                                </svg>
                                                </span>'>Conselho</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div >
                                <!--end::Input group-->
                                <div class="d-flex justify-content-between flex-nowrap border border-gray-300 p-1" id="radios">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="" name="nota_radio" />
                                        <label class="form-check-label text-gray-800" for="flexCheckboxLg">
                                           Limpar
                                        </label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                        <input class="form-check-input" type="radio" value="7.0" name="nota_radio" />
                                        <label class="form-check-label text-gray-800" for="flexCheckboxLg">
                                            7.0
                                        </label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-danger form-check-solid">
                                        <input class="form-check-input" type="radio" value="8.0" name="nota_radio"  />
                                        <label class="form-check-label text-gray-800" for="flexCheckboxSm">
                                            8.0
                                        </label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-warning form-check-solid">
                                        <input class="form-check-input" type="radio" value="9.0" name="nota_radio" />
                                        <label class="form-check-label text-gray-800" for="flexRadioLg">
                                            9.0
                                        </label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="10.0" name="nota_radio" />
                                        <label class="form-check-label text-gray-800" for="flexRadioLg">
                                            10.0
                                        </label>
                                    </div>
                                </div>
                                <!--begin::List-->
                                <div class="modal-alunos-notas me-n7 pe-7 ">
                                    @if(!empty($matriculas))
                                        @foreach($matriculas as $key => $matricula)
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center me-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    {{--                                            <div class="symbol symbol-35px symbol-circle">--}}
                                                    {{--                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />--}}
                                                    {{--                                            </div>--}}
                                                    {{--                                            --}}

                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <div class="d-flex align-items-center texto fw-bold text-hover-primary {{ $matricula->status !== "MTR" ? "text-decoration-line-through text-danger":"text-dark"}} ">
                                                            {{$matricula->nome}}
                                                        </div>
                                                        <span class="fw-semibold text-muted ">Número: {{ $matricula->numero > 0 ? $matricula->numero : '' }}</span>
                                                        <span class="fw-semibold text-muted"> - Id: {{ $matricula->aluno_id }}</span>
                                                        <span class="fw-semibold text-muted"> - Status: {{ $matricula->status }}</span>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex ">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="w-60px">
                                                            <input type="text" id="nota" data-aluno_status="{{$matricula->status}}" data-aluno_id="{{ $matricula->aluno_id }}" data-nota_id="0" data-nota-filter="nota"
                                                                   class="form-control nota texto form-control-solid text-center text-gray-800 {{ $matricula->status !== "MTR" ? "bg-light-danger":"bg-light-primary"}} "
                                                                    {{ $matricula->status !== "MTR" ? "readonly":""}}
                                                            />
                                                        </div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                        @endforeach
                                    @endif
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--end::Notice-->
                        </form>
                    </div>
                    <!--end::Modal body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button  type="submit" class="btn btn-primary" id="btn_salvar_notas">
                            <span class="indicator-label"><i class="fas fa-cloud-upload-alt "></i> Salvar</span>
                            <span class="indicator-progress">Aguarde...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Container-->
        <div class="modal fade " id="kt_modal_media" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-lg modal-fullscreen2">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body mx-xl-10 pt-0 pb-0">
                        <form id="formulario-medias" method="post">
                            <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h1 class="mb-3">Cadastrar médias</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex">
                                    <div class="text-muted fw-semibold fs-5">Matematica - </div>
                                    <div class="link-primary fw-bold">1° Bimestre</div>.
                                </div>
                                <!--end::Description-->
                            </div>

                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mb-15">
                                <!--end::Input group-->
                                <!--begin::List-->
                                <div class="modal-alunos-medias me-n7 pe-7" >
                                    @if(!empty($matriculas))
                                        @foreach($matriculas as $key => $matricula)
                                            <!--begin::User-->
                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center me-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                    </div>
                                                    {{--        <div class="symbol symbol-35px symbol-circle">--}}
                                                    {{--           <img alt="Pic" src="assets/media/avatars/300-1.jpg" />--}}
                                                    {{--        </div>--}}
                                                    {{--       --}}

                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <!--begin::Name-->
                                                        <div class="d-flex align-items-center texto fw-bold text-dark text-hover-primary ">
                                                            {{$matricula->nome}}
                                                            {{--                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span>--}}
                                                        </div>
                                                        <!--end::Name-->
                                                        <!--begin::Email-->
                                                        <div class="fw-semibold text-muted">Número: {{ $matricula->numero > 0 ? $matricula->numero : '' }}</div>
                                                        <!--end::Email-->
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Stats-->
                                                <div class="d-flex ">
                                                    <!--begin::Sales-->
                                                    <div class="text-end">
                                                        <div class="w-55px">
                                                            <input type="text" id="nota" data-media-filter="media" class="form-control texto form-control-solid text-center text-gray-800 bg-light-primary nota" name='notas[{{$key}}][nota]'/>
                                                        </div>
                                                    </div>
                                                    <!--end::Sales-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::User-->
                                        @endforeach
                                    @endif
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--end::Notice-->
                        </form>
                    </div>
                    <!--end::Modal body-->
                    <div class="modal-footer my-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button  type="submit" class="btn btn-primary" id="btn_salvar_medias">
                            <span class="indicator-label"><i class="fas fa-cloud-upload-alt "></i> Salvar</span>
                            <span class="indicator-progress">Aguarde...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>

        <div class="modal fade " id="kt_modal_media_visualizar" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-xl modal-fullscreen2">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end" >
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body mx-xl-10 pt-0 pb-0">
                        <div>
                            <!--begin::Heading-->
                            <div class="text-center mb-1">
                                <!--begin::Title-->
                                <h1 class="mb-2">Notas do bimestre</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="d-flex justify-content-center">
                                    <div class="text-muted fw-semibold fs-5">Turma B,</div>
                                    <div class="text-muted fw-semibold fs-5">Matematica,</div>
                                    <div class="text-muted fw-semibold fs-5">Matutino,</div>
                                    <div class="text-primary fw-bold fs-5">1° Bimestre</div>
                                </div>

                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <div class="modal-alunos-notas me-n7 pe-7">
                                <div class="table-responsive">
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fw-bold text-gray-800 bg-light" id="head_tr_tipos">

                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody id="notas_alunos">
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                            </div>
                            <!--end::Notice-->
                        </div>
                    </div>
                    <!--end::Modal body-->
                    <div class="modal-footer justify-content-between">
                        <div>
                            <div>
                                <span class="badge badge-light-info text-info badge-lg">{{ count($matriculas)}}</span>
                                <span class="text-gray-800"> alunos ativos</span>
                            </div>
                            <div>
                                <span class="badge badge-light-success text-success badge-lg fs-7">ACM</span>
                                <span class="text-gray-800"> Acima ou igual a média</span>
                            </div>
                            <div>
                                <span class="badge badge-light-danger text-danger badge-lg fs-7">ABM</span>
                                <span class="text-gray-800"> Abaixo da média</span>
                            </div>
                        </div>

                        <div>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>

                    </div>
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    </div>

@endsection
@once
    @push('js')
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('assets/js/diario/bimestres/bimestres_table.js')}}"></script>
        <script src="{{asset('assets/js/diario/notas/nota_table.js')}}"></script>
{{--        <script src="{{asset('assets/js/diario/media/mediabim_table.js')}}"></script>--}}
    @endpush
@endonce



