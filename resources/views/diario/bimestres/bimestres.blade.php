@extends('diario.dash.dash')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->

        <div class="container-xxl" id="kt_content_container">
            <!--begin::Products-->
            <div class="card card-flush mb-5">
                <!--begin::Card header-->
                <div class="card-header align-items-center pt-8 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div class="d-flex flex-wrap flex-sm-nowrap ">
                            <!--begin::Image-->
                            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-40px h-40px w-lg-100px h-lg-100px me-7 mb-4">
                                <img class="mw-50px mw-lg-50px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="image">
                            </div>
                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap ">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">UE Janoca Maciel</a>
                                            <span class="badge badge-light-primary me-auto">2021</span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">#Gerenciamento do diário.</div>
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5">Componente: <span class="badge badge-light-danger">{{$disciplina->nome}}</span></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->

                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->

                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <a href="{{route('diario.turma.index')}}" class="btn btn-sm btn-light-primary mb-3 ">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                    <a href="{{route('diario.mediaanual.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-success mb-3 ">
                        <i class="fas fa-arrow-left"></i>
                        Média anual
                    </a>
                    <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-warning mb-3 ">
                        <i class="fas fa-arrow-left"></i>
                        Recuperação
                    </a>
                    <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-info mb-3 ">
                        <i class="fas fa-arrow-left"></i>
                        Concelho
                    </a>
                    <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-danger mb-3">
                        <i class="fas fa-arrow-left"></i>
                        Encerrar
                    </a>
                </div>
                <!--end::Card body-->
            </div>

            <form action="{{route('diario.conteudo.faltas.salvarFaltas')}}" id="formulario" method="post">
                @csrf
                <input type="hidden" name="turma_id"  value="{{$turma->id}}"/>
                <input type="hidden" name="disciplina_id"  value="{{$disciplina->id}}"/>
                <input type="hidden" id="medias_salvas"  value="{{$mediasSalvas ? $mediasSalvas : 0}}"/>
                <div class="row g-5 g-xl-8">
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
                                @if(!$mediasSalvas->get(0)['salvo'])
                                    <!--begin::Menu-->
                                    <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[0]->id])}}" class="btn btn-sm btn-light-primary me-3">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        Nota
                                        <!--end::Svg Icon-->
                                    </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[0]->id])}}" class="btn btn-sm btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                     @else
                                        <button  class="btn btn-sm btn-light-danger" disabled>
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
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                @foreach($listaTipoNotas as $indice => $listaTipoNota)
                                    @if ($listaTipoNota->periodos[$indice]->ordem == 1)
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
                                                <a   href="{{$mediasSalvas->get(0)['salvo'] ? "javascript:;" :
                                                    route('diario.notas.turma.disciplina.editar', ['turma' => $turma->id,'disciplina' => $disciplina->id,'tipoNota' => $listaTipoNota->id])}}" class="{{$mediasSalvas->get(0)['salvo'] ? "bloquear":""}} editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6">
                                                  <span class="svg-icon svg-icon-primary svg-icon-2"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo4/dist/../src/media/svg/icons/Design/Edit.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                    </g>
                                                </svg></span>
                                                </a>

                                            <a href="javascript:;" data-salvo="{{$mediasSalvas->get(0)['salvo']}}"
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
                                 @endforeach
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
                                @if(!$mediasSalvas->get(1)['salvo'])
                                    <!--begin::Menu-->
                                        <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[1]->id])}}" class="btn btn-sm btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[1]->id])}}" class="btn btn-sm btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-danger" disabled>
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
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                @foreach($listaTipoNotas as $indice => $listaTipoNota)
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
                            @endforeach
                            <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                </div>
                <div class="row g-5 g-xl-8">
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
                                        <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[2]->id])}}" class="btn btn-sm btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[2]->id])}}" class="btn btn-sm btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-danger" disabled>
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
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                @foreach($listaTipoNotas as $indice => $listaTipoNota)
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
                            @endforeach
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
                                        <a href="{{route('diario.notas.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[3]->id])}}" class="btn btn-sm btn-light-primary me-3">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-primary me-3" disabled>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Nota
                                            <!--end::Svg Icon-->
                                        </button>
                                    @endif
                                    @if(!empty($listaTipoNotas))
                                        <a href="{{route('diario.mediabim.turma.disciplina.periodo',['turma' => $turma->id,'disciplina' => $disciplina->id,'periodo' => $periodos[3]->id])}}" class="btn btn-sm btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                            Média
                                            <!--end::Svg Icon-->
                                        </a>
                                    @else
                                        <button  class="btn btn-sm btn-light-danger" disabled>
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
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                @foreach($listaTipoNotas as $indice => $listaTipoNota)
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
                            @endforeach
                            <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                </div>
            </form>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>

@endsection
@once
    @push('js')
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('assets/js/main/bimestres/bimestres_table.js')}}"></script>
    @endpush
@endonce



