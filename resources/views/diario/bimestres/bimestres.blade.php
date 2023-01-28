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
                height:100%;

            }
            .modal-fullscreen2 .modal-footer,.modal-fullscreen .modal-header{
                border-radius:0
            }
            .modal-fullscreen2 .modal-body{
                overflow-y: hidden;
            }
            .modal-alunos-notas{
                height: calc(100vh - 25rem);
                overflow-y:auto;
            }
            .modal-alunos-medias{
                height: calc(100vh - 18rem);
                overflow-y:auto;
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
                                <img class="mw-50px mw-lg-50px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="image">
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
            <input type="text" name="turma_id"  value="{{$turma->id}}"/>
            <input type="text" name="disciplina_id"  value="{{$disciplina->id}}"/>
            <input type="hidden" id="medias_salvas"  value="{{$mediasSalvas ? $mediasSalvas : 0}}"/>
            <!--end::Informações-->
            <form action="{{route('diario.conteudo.faltas.salvarFaltas')}}" id="formulario" method="post">
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
                                    @if($mediasSalvas->get(0)['salvo'])
                                        <a href="javascript:;" class="btn btn-primary d-block d-sm-none  me-3" onclick="Nota.getPeriodo({{$periodos[0]->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">Nota</a>
                                        <a href="javascript:;" class="btn btn-light-primary d-none d-sm-block me-3" onclick="Nota.getPeriodo({{$periodos[0]->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">Nota </a>
                                    @else
                                        <button  class="btn btn-primary d-block d-sm-none  me-3" disabled>Nota</button>
                                        <button  class="btn btn-light-primary  d-none d-sm-block me-3" disabled>Nota</button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[0]->id])}}" class="btn  btn-danger d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#kt_modal_media">Média</a>
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[0]->id])}}" class="btn  btn-light-danger d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#kt_modal_media">Média</a>
                                    @else
                                        <button  class="btn  btn-danger d-block d-sm-none" disabled>Média</button>
                                        <button  class="btn  btn-light-danger d-sm-block" disabled>Média</button>
                                    @endif
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-flex flex-column card-body justify-content-between pt-5">
                                <!--begin::Item-->
                                <div>@foreach($listaTipoNotas as $indice => $listaTipoNota)
                                    @if ($listaTipoNota->periodos[$indice]->ordem == 1)
                                        <div class="d-flex align-items-sm-center mb-7 item">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-primary svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"/>
                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"/>
                                                        </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
													</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$listaTipoNota->tipo}}</a>
                                                    <span class="text-gray-700 fw-bold d-block fs-7">{{$listaTipoNota->data}}</span>
                                                </div>
                                                <div class="d-flex align-items-center me-6" id="painel">
                                                    <a   href="{{$mediasSalvas->get(0)['salvo'] ? "javascript:;" :
                                                    route('diario.notas.turma.disciplina.editar', ['turma' => $turma->id,'disciplina' => $disciplina->id,'tipoNota' => $listaTipoNota->id])}}" class="{{$mediasSalvas->get(0)['salvo'] ? "bloquear":""}} editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6">
                                                        <i class="fa-solid fa-pen fs-6"></i>
                                                    </a>

                                                    <a href="javascript:;" data-salvo="{{$mediasSalvas->get(0)['salvo']}}"
                                                       data-action="{{route('diario.bimestres.destroy', ['tipoNota'=> $listaTipoNota->id])}}" class=" deletar btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                        <i class="fa-solid fa-trash fs-6"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                     @endif
                                    @endforeach</div>
                                <div>
                                <div class="separator separator-content my-4"><span class="w-250px fw-bold">Mais opções</span></div>
                                <div class="separator separator-dashed separator-content  mt-12 mb-5">
                                    <button class="btn btn-icon me-5"><i class="las la-print text-warning fs-2 "></i></button>
                                    <button class="btn btn-icon me-5 d-none"><i class="las la-lock-open text-success fs-2"></i></button>
                                    <button class="btn btn-icon me-5 "><i class="las la-lock text-danger fs-2 "></i></button>
                                    <button class="btn btn-icon"><i class="las la-file-alt text-info fs-2"></i></button>
                                </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin::List Widget 5-->
                        <div class="card  card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">2° Bimestre</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Lançamento de notas.</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin:: Se o primeiro bimestre está salvo-->
                                    @if($mediasSalvas->get(1)['salvo'])
                                        <a href="javascript:;" class="btn btn-primary d-block d-sm-none  me-3" onclick="Nota.getPeriodo({{$periodos[1]->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">Nota</a>
                                        <a href="javascript:;" class="btn btn-light-primary d-none d-sm-block me-3" onclick="Nota.getPeriodo({{$periodos[1]->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">Nota </a>
                                    @else
                                        <button  class="btn btn-primary d-block d-sm-none  me-3" disabled>Nota</button>
                                        <button  class="btn btn-light-primary  d-none d-sm-block me-3" disabled>Nota</button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[1]->id])}}" class="btn  btn-danger d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#kt_modal_media">Média</a>
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[1]->id])}}" class="btn  btn-light-danger d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#kt_modal_media">Média</a>
                                    @else
                                        <button  class="btn  btn-danger d-block d-sm-none" disabled>Média</button>
                                        <button  class="btn  btn-light-danger d-sm-block" disabled>Média</button>
                                    @endif
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-flex flex-column card-body justify-content-between pt-5">
                                <div>@foreach($listaTipoNotas as $indice => $listaTipoNota)
                                        @if ($listaTipoNota->periodos[$indice]->ordem == 2)
                                            <div class="d-flex align-items-sm-center mb-7 item">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
													</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$listaTipoNota->tipo}}</a>
                                                        <span class="text-muted fw-bold d-block fs-7">Data: {{$listaTipoNota->data}}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center me-6" id="painel">
                                                        <a   href="{{$mediasSalvas->get(1)['salvo'] ? "javascript:;" :
                                                    route('diario.notas.turma.disciplina.editar', ['turma' => $turma->id,'disciplina' => $disciplina->id,'tipoNota' => $listaTipoNota->id])}}" class="{{$mediasSalvas->get(1)['salvo'] ? "bloquear":""}} editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6">
                                                  <span class="svg-icon svg-icon-primary svg-icon-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Design/Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                    </g>
                                                </svg></span>
                                                        </a>

                                                        <a href="javascript:;" data-salvo="{{$mediasSalvas->get(1)['salvo']}}"
                                                           data-action="{{route('diario.tipo_nota.destroy', ['tipoNota'=> $listaTipoNota->id])}}" class=" deletar btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                <span class="svg-icon svg-icon-2 svg-icon-primary "><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                        @endif
                                    @endforeach</div>
                                <div>
                                    <div class="separator separator-content my-4"><span class="w-250px fw-bold">Mais opções</span></div>
                                    <div class="separator separator-dashed separator-content  mt-12 mb-5">
                                        <button class="btn btn-icon me-5"><i class="las la-print text-warning fs-2 "></i></button>
                                        <button class="btn btn-icon me-5 "><i class="las la-lock-open text-success fs-2"></i></button>
                                        <button class="btn btn-icon me-5 d-none"><i class="las la-lock text-danger fs-2 "></i></button>
                                        <button class="btn btn-icon"><i class="las la-file-alt text-info fs-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin::List Widget 4-->
                        <div class="card  card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">3° Bimestre</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Lançamento de notas.</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin:: Se o primeiro bimestre está salvo-->
                                    @if(!$mediasSalvas->get(2)['salvo'])
                                        <!--begin::Menu-->
                                        <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[2]->id])}}" class="btn btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn  btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[2]->id])}}" class="btn  btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-light-danger" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-flex flex-column card-body justify-content-between pt-5">
                                <!--begin::Item-->
                                <div>@foreach($listaTipoNotas as $indice => $listaTipoNota)
                                    @if ($listaTipoNota->periodos[$indice]->ordem == 3)
                                        <div class="d-flex align-items-sm-center mb-7 item">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
													</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$listaTipoNota->tipo}}</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Data: {{$listaTipoNota->data}}</span>
                                                </div>
                                                <div class="d-flex align-items-center me-6" id="painel">
                                                    <a   href="{{$mediasSalvas->get(2)['salvo'] ? "javascript:;" :
                                                    route('diario.notas.turma.disciplina.editar', ['turma' => $turma->id,'disciplina' => $disciplina->id,'tipoNota' => $listaTipoNota->id])}}" class="{{$mediasSalvas->get(2)['salvo'] ? "bloquear":""}} editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6">
                                                  <span class="svg-icon svg-icon-primary svg-icon-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Design/Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                    </g>
                                                </svg></span>
                                                    </a>

                                                    <a href="javascript:;" data-salvo="{{$mediasSalvas->get(2)['salvo']}}"
                                                       data-action="{{route('diario.tipo_nota.destroy', ['tipoNota'=> $listaTipoNota->id])}}" class=" deletar btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                <span class="svg-icon svg-icon-2 svg-icon-primary "><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                    @endif
                                @endforeach</div>
                                <div>
                                    <div class="separator separator-content my-4"><span class="w-250px fw-bold">Mais opções</span></div>
                                    <div class="separator separator-dashed separator-content  mt-12 mb-5">
                                        <button class="btn btn-icon me-5"><i class="las la-print text-warning fs-2 "></i></button>
                                        <button class="btn btn-icon me-5 "><i class="las la-lock-open text-success fs-2"></i></button>
                                        <button class="btn btn-icon me-5 d-none"><i class="las la-lock text-danger fs-2 "></i></button>
                                        <button class="btn btn-icon"><i class="las la-file-alt text-info fs-2"></i></button>
                                    </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin::List Widget 5-->
                        <div class="card  card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">4° Bimestre</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Lançamento de notas.</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin:: Se o primeiro bimestre está salvo-->
                                    @if(!$mediasSalvas->get(3)['salvo'])
                                        <!--begin::Menu-->
                                        <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[3]->id])}}" class="btn  btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[3]->id])}}" class="btn btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn  btn-light-danger" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-flex flex-column card-body justify-content-between pt-5">
                                <!--begin::Item-->
                                <div>@foreach($listaTipoNotas as $indice => $listaTipoNota)
                                    @if ($listaTipoNota->periodos[$indice]->ordem == 4)
                                        <div class="d-flex align-items-sm-center mb-7 item">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-2x svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
                                                        <!--end::Svg Icon-->
													</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$listaTipoNota->tipo}}</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Data: {{$listaTipoNota->data}}</span>
                                                </div>
                                                <div class="d-flex align-items-center me-6" id="painel">
                                                    <a   href="{{$mediasSalvas->get(3)['salvo'] ? "javascript:;" :
                                                    route('diario.notas.turma.disciplina.editar', ['turma' => $turma->id,'disciplina' => $disciplina->id,'tipoNota' => $listaTipoNota->id])}}" class="{{$mediasSalvas->get(3)['salvo'] ? "bloquear":""}} editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6">
                                                  <span class="svg-icon svg-icon-primary svg-icon-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Design/Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                    </g>
                                                </svg></span>
                                                    </a>

                                                    <a href="javascript:;" data-salvo="{{$mediasSalvas->get(3)['salvo']}}"
                                                       data-action="{{route('diario.tipo_nota.destroy', ['tipoNota'=> $listaTipoNota->id])}}" class=" deletar btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                <span class="svg-icon svg-icon-2 svg-icon-primary "><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                    @endif
                                @endforeach</div>
                                <div>
                                    <div class="separator separator-content my-4"><span class="w-250px fw-bold">Mais opções</span></div>
                                    <div class="separator separator-dashed separator-content  mt-12 mb-5">
                                        <button class="btn btn-icon me-5"><i class="las la-print text-warning fs-2 "></i></button>
                                        <button class="btn btn-icon me-5 "><i class="las la-lock-open text-success fs-2"></i></button>
                                        <button class="btn btn-icon me-5 d-none"><i class="las la-lock text-danger fs-2 "></i></button>
                                        <button class="btn btn-icon"><i class="las la-file-alt text-info fs-2"></i></button>
                                    </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                </div>
            </form>

            <div class="my-2">
                <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn d-block d-sm-none   btn-danger mb-3">Encerrar</a>
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
                    <div class="modal-body mx-xl-10 pt-0 pb-0" >
                        <input  class="link-primary fw-bold" id="periodo"/>
                        <input  class="link-primary fw-bold" id="tipo_nota_id" value="0"/>
                        <form action="{{route('diario.nota.cadastrar')}}" id="formulario-notas" method="post">
                        <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h1 class="mb-3">Cadastrar notas</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">Matematica -
                                    <a target="_blank" href="#" class="link-primary fw-bold">1° Bimestre</a>
                                </div>
                                <!--end::Description-->
                            </div>

                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mb-15">
                                    <!--begin::Input group-->
                                <div class="row g-5">
                                        <!--begin::Col-->
                                        <div class="col-6 col-sm-6 fv-row ">

                                            <label class="required texto fw-bold mb-1">Data da nota</label>
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                </svg>
                                            </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-solid ps-12" placeholder="Selecione" name="data_nota" id="data_nota"/>
                                                <!--end::Datepicker-->
                                            </div>

                                            <!--end::Input-->
                                        </div>
                                        <div class="col-6 col-sm-6 fv-row pb-8 ">
                                            <label class="required texto d-none d-sm-block fw-bold mb-1">Tipo de Avaliação</label>
                                            <label class="required texto d-block d-sm-none fw-bold mb-1">T. de Avaliação</label>
                                            <select class="form-select form-select-solid" data-placeholder="Selecione" name="tipo" id="tipo_nota">
                                                <option  value=""></option>
                                                <option selected value="Trabalho">Trabalho</option>
                                                <option value="Prova">Prova</option>
                                                <option value="Recuperação">Recuperação</option>
                                                <option value="Conselho">Conselho</option>
                                            </select>

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                <!--begin::List-->
                                <div class="modal-alunos-notas me-n7 pe-7">
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
                                                    <input type="text" id="nota" data-aluno_id="{{ $matricula->aluno_id }}" data-nota-filter="nota" class="form-control texto form-control-solid text-center text-gray-800 bg-light-primary nota"/>
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
                    <div class="modal-body mx-xl-10 pt-0 pb-0" >
                        <form action="{{route('diario.nota.cadastrar')}}" id="formulario-medias" method="post">
                            <!--begin::Heading-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h1 class="mb-3">Cadastrar médias</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">Matematica -
                                    <a target="_blank" href="#" class="link-primary fw-bold">1° Bimestre</a>.</div>
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



