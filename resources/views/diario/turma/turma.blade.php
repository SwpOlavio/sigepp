@extends('diario.dash.dash')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Products-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark">UE Manoel Trindade</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Ano letivo 2020</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
															</g>
														</svg>
													</span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <div class="accordion" id="kt_accordion">
                        <!--begin::Accordion-->
                        @foreach($turmas as $turma)

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="kt_accordion_header_{{$turma->id}}">
                                    <button class="accordion-button fs-4 fw-semibold {{$loop->iteration == 1 ? "collapsed":""}}"  type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_body_{{$turma->id}}" aria-expanded="true" aria-controls="kt_accordion_body_{{$turma->id}}">
                                        <div class="d-flex align-items-center  rounded ">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-primary svg-icon-1 me-5">
                                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="currentColor"/>
                                                <path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            <div class="flex-grow-1 me-2">
                                                <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6 me-4">{{$turma->descricao}}</a>
                                                <span class="fw-bolder text-warning py-1"><i class="fas fa-unlock-alt text-primary "></i></span>
                                                <span class="text-muted fw-bold d-block">8º ano Fund. II - Fundamental, vespertino</span>
                                            </div>
                                            <div>

                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Lable-->

                                            <!--end::Lable-->
                                        </div>
                                    </button>
                                </h2>
                                <div id="kt_accordion_body_{{$turma->id}}" class="accordion-collapse collapse {{$loop->iteration == 1 ? "show" : ""}}" aria-labelledby="kt_accordion_header_{{$turma->id}}" data-bs-parent="#kt_accordion">
                                    <div class="accordion-body">
                                        @foreach($turma->disciplinas as $disciplina)
                                            <!--begin::Item-->
                                            <div class="d-flex flex-row flex-wrap justify-content-between mb-7">
                                                <!--begin::Symbol-->

                                                <div class="d-flex align-items-sm-center">
                                                    <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('assets/media/svg/brand-logos/plurk.svg')}}" class="h-50 align-self-center" alt="">
                                                </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{$disciplina->nome}}</a>
                                                            <span class="text-muted fw-bold d-block fs-7">CHS: 4 & CHA: 160</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center flex-wrap ">
                                                    <a href="{{route('diario.conteudo.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-active-primary btn-icon-primary btn-light-primary me-3  hover-scale my-1">
                                                        <i class="fas fa-pen-nib"></i>
                                                        Conteúdos
                                                    </a>
                                                    <a href="{{route('diario.bimestres.turma.disciplina',['turma' => $turma->id,'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-active-primary btn-icon-primary btn-light-primary  hover-scale  my-1">Avaliações</a>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        <!--end::Accordion-->

                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
@endsection




