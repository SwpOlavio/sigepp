@extends('diario.dash.dash')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <form class="card card-flush py-4 mb-5" id="kt_conteudo_form" action="{{route('diario.conteudo.store')}}">
                <input type="hidden" id="conteudo_id" value="0">
                <input type="hidden" name="turma_id" id="turma_id" value="{{$turma->id}}">
                <input type="hidden" name="disciplina_id" id="disciplina_id" value="{{$disciplina->id}}">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2 id="titulo_conteudo">Cadastrar conteúdos</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body border-bottom pt-0">

                    <div class="d-flex flex-wrap gap-5">

                        <div class="fv-row w-100 flex-md-root">

                            <label class="required fs-6 fw-bold mb-2">Data da aula</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2 position-absolute mx-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                </svg>
                                            </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid form-control-lg ps-12" placeholder="Selecione" name="data" id="data"/>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label">Hora/Aula</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select-solid form-select form-control-lg mb-2" name="hora_aula" data-control="select2" data-hide-search="true" data-placeholder="Selecione" id="hora_aula">
                                <option value="">Selecione</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->

                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label">Presencial ?</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select-solid form-select form-select-lg mb-2" name="tipo_aula" data-control="select2" data-hide-search="true" data-placeholder="Selecione" id="tipo_aula">
                                <option value="">Selecione</option>
                                <option value="Sim" selected="selected">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->

                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="form-label">Plataforma</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select-solid form-select  form-select-lg mb-2" name="plataforma" disabled="disabled"  data-control="select2" data-hide-search="true" data-placeholder="Selecione" id="plataforma">
                                <option value="">Selecione</option>
                                <option value="Google Classroom">Google Classroom</option>
                                <option value="Grupos WhatsApp">Grupos WhatsApp</option>
                                <option value="YouTube">YouTube</option>
                                <option value="Google Meet">Google Meet</option>
                                <option value="Entrega de materiais impressos">Entrega de materiais impressos</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->

                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-wrap gap-5 my-2">
                        <!--begin::Input group-->
                        <div class="fv-row w-100 flex-md-root">
                            <!--begin::Label-->
                            <label class="required form-label">Bimestre</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select-solid form-select form-select-lg mb-2" name="periodo_id" data-control="select2" data-hide-search="true" data-placeholder="Selecione" id="periodo_id">
                                <option value="">Selecione</option>
                                <option value="1">1° Bimestre</option>
                                <option value="2">2° Bimestre</option>
                                <option value="3">3° Bimestre</option>
                                <option value="4">4° Bimestre</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->

                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Input group-->
                    <div class="separator border-2 my-5"></div>
                    <!--begin::Input group-->
                    <div class="my-2">
                        <!--begin::Label-->
                        <label class="required form-label">Contéudo</label>
                        <!--end::Label-->
                        <!--begin::Editor-->
                        <div id="kt_ecommerce_add_product_meta_description"  class="form-control-solid min-h-100px mb-2"></div>
                        <!--end::Editor-->
                        <!--begin::Description-->
                        <a href="javascript:;" data-action="{{route('diario.conteudo.turma.ultimoConteudo',['turma' => $turma->id, 'disciplina' => $disciplina->id])}}" class="badge badge-light-primary fs-7" id="ultimo_conteudo">inserir último conteúdo</a>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <!--end::Input group-->
                </div>
                <!--end::Card header-->

                <div class="card-footer text-end justify-content-end">
                    <a href="{{route('diario.turma.index')}}" class="btn btn-sm btn-light-primary me-2 ">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                    <button type="reset" class="btn btn-sm btn-light-danger me-2" id="kt_conteudo_cancelar">Limpar</button>
                    <button  id="kt_conteudo_cadastrar" class="btn btn-sm btn-primary">
                        <span class="indicator-label">Salvar</span>
                        <span class="indicator-progress">Aguarde...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
            <div class="card">
                <!--begin::Card head-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title d-flex align-items-center">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                        <span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
											</svg>
										</span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <h3 class="fw-bolder m-0 text-gray-800">Conteúdos</h3>

                        </div>

                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_tab_bimestre_1" class="nav-link justify-content-center text-active-gray-800 " data-bs-toggle="tab" role="tab" href="#kt_activity_b1">1° Bim</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_tab_bimestre_2" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_b2">2° Bim</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_tab_bimestre_3" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_b3">3° Bim</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_tab_bimestre_4" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_b4">4° Bim</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card head-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Tab Content-->
                    <div class="tab-content" id="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_activity_b1" class="card-body p-0 tab-pane fade show " role="tabpanel" aria-labelledby="kt_tab_bimestre_1">
                            <!--begin::Timeline-->
                            <div class="timeline" id="timeline_1">
                                <!--begin::Timeline item-->
                                @foreach($conteudos1['conteudos'] as $conteudo)
                                    <div class="timeline-item item_1">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon  svg-icon-2 {{$conteudo->lancou_falta == 'S' ? 'svg-icon-success': 'svg-icon-primary'}}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content mb-2 mt-n1">
                                            <!--begin::Timeline heading-->
                                            <div class="pe-3 mb-5">
                                                <!--begin::Title-->
                                                <div class="fs-5 fw-bold mb-2">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:;" class="text-dark text-wrap  me-1">{!! $conteudo->conteudo !!} </a>
                                                        <div>
                                                            <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+{{$conteudo->hora_aula}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="d-flex align-items-center fs-6">
                                                    <!--begin::Info-->
                                                    <div class="me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">{{date('d/m/Y', strtotime($conteudo->data))}}</span></div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="{{$conteudo->plataforma != '' ? $conteudo->plataforma:"Aula presencial"}}">
                                                        <img src="{{asset("assets/media/svg/social-logos/{$plataformas[$conteudo->plataforma]}")}}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Timeline heading-->
                                            <div class="pb-5">
                                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded p-7">
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="{{route('diario.conteudo.turma.disciplina.faltas',['conteudo' => $conteudo->id,'turma' => $turma->id, 'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow"  data-acao="editar" data-id="{{$conteudo->id}}">Editar</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar" data-periodo="{{$conteudo->periodo_id}}" data-horaaula="{{$conteudo->hora_aula}}" data-id="{{$conteudo->id}}" >Excluir</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                            @endforeach

                            <!--end::Timeline item-->
                            </div>
                            <div class="my-5 text-center">
                                <button class="btn btn-primary  text-center" id="kt_ver_mais_1">
                                    <span class="indicator-label">Ver mais</span>
                                    <span class="indicator-progress">Aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="mx-6 fs-6 fw-bold text-gray-500">Cadastrados <span class="badge badge-light-primary me-auto" id="total_aula_1">{{$conteudos1['total']}}</span> horas aulas.</div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_b2" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_tab_bimestre_2">
                            <!--begin::Timeline-->
                            <div class="timeline" id="timeline_2">
                                <!--begin::Timeline item-->
                                @foreach($conteudos2['conteudos'] as $conteudo)
                                    <div class="timeline-item item_2">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon  svg-icon-2  {{$conteudo->lancou_falta == 'S' ? 'svg-icon-success': 'svg-icon-primary'}}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content mb-2 mt-n1">
                                            <!--begin::Timeline heading-->
                                            <div class="pe-3 mb-5">
                                                <!--begin::Title-->
                                                <div class="fs-5 fw-bold mb-2">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:;" class="text-dark text-wrap  me-1">{!! $conteudo->conteudo !!}</a>
                                                        <div>
                                                            <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+{{$conteudo->hora_aula}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="d-flex align-items-center fs-6">
                                                    <!--begin::Info-->
                                                    <div class="me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">{{date('d/m/Y', strtotime($conteudo->data))}}</span></div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="{{$conteudo->plataforma != '' ? $conteudo->plataforma:"Aula presencial"}}">
                                                        <img src="{{asset("assets/media/svg/social-logos/{$plataformas[$conteudo->plataforma]}")}}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Timeline heading-->
                                            <div class="pb-5">
                                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded p-7">
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="{{route('diario.conteudo.turma.disciplina.faltas',['conteudo' => $conteudo->id,'turma' => $turma->id, 'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow"  data-acao="editar" data-id="{{$conteudo->id}}">Editar</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar" data-periodo="{{$conteudo->periodo_id}}" data-horaaula="{{$conteudo->hora_aula}}" data-id="{{$conteudo->id}}" >Excluir</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                            @endforeach

                            <!--end::Timeline item-->
                            </div>
                            <div class="my-5 text-center">
                                <button class="btn btn-primary  text-center" id="kt_ver_mais_2">
                                    <span class="indicator-label">Ver mais</span>
                                    <span class="indicator-progress">Aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="mx-6 fs-6 fw-bold text-gray-500">Cadastrados <span class="badge badge-light-primary me-auto" id="total_aula_2">{{$conteudos2['total']}}</span> horas aulas.</div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_b3" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_tab_bimestre_3">
                            <!--begin::Timeline-->
                            <div class="timeline" id="timeline_3">
                                <!--begin::Timeline item-->

                                @foreach($conteudos3['conteudos'] as $conteudo)
                                    <div class="timeline-item item_3">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon  svg-icon-2 {{$conteudo->lancou_falta == 'S' ? 'svg-icon-success': 'svg-icon-primary'}}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content mb-2 mt-n1">
                                            <!--begin::Timeline heading-->
                                            <div class="pe-3 mb-5">
                                                <!--begin::Title-->
                                                <div class="fs-5 fw-bold mb-2">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:;" class="text-dark text-wrap  me-1">{!! $conteudo->conteudo !!}</a>
                                                        <div>
                                                            <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+{{$conteudo->hora_aula}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="d-flex align-items-center fs-6">
                                                    <!--begin::Info-->
                                                    <div class="me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">{{date('d/m/Y', strtotime($conteudo->data))}}</span></div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="{{$conteudo->plataforma != '' ? $conteudo->plataforma:"Aula presencial"}}">
                                                        <img src="{{asset("assets/media/svg/social-logos/{$plataformas[$conteudo->plataforma]}")}}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Timeline heading-->
                                            <div class="pb-5">
                                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded p-7">
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="{{route('diario.conteudo.turma.disciplina.faltas',['conteudo' => $conteudo->id,'turma' => $turma->id, 'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow"  data-acao="editar" data-id="{{$conteudo->id}}">Editar</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar"  data-periodo="{{$conteudo->periodo_id}}" data-horaaula="{{$conteudo->hora_aula}}" data-id="{{$conteudo->id}}" >Excluir</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                            @endforeach

                            <!--end::Timeline item-->
                            </div>
                            <div class="my-5 text-center">
                                <button class="btn btn-primary  text-center" id="kt_ver_mais_3">
                                    <span class="indicator-label">Ver mais</span>
                                    <span class="indicator-progress">Aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="mx-6 fs-6 fw-bold text-gray-500">Cadastrados <span class="badge badge-light-primary me-auto" id="total_aula_3">{{$conteudos3['total']}}</span> horas aulas.</div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_b4" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_tab_bimestre_4">
                            <!--begin::Timeline-->
                            <div class="timeline" id="timeline_4">

                                @foreach($conteudos4['conteudos'] as $conteudo)
                                    <div class="timeline-item item_4">
                                        <!--begin::Timeline line-->
                                        <div class="timeline-line w-40px"></div>
                                        <!--end::Timeline line-->
                                        <!--begin::Timeline icon-->
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon  svg-icon-2 {{$conteudo->lancou_falta == 'S' ? 'svg-icon-success': 'svg-icon-primary'}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Timeline icon-->
                                        <!--begin::Timeline content-->
                                        <div class="timeline-content mb-2 mt-n1">
                                            <!--begin::Timeline heading-->
                                            <div class="pe-3 mb-5">
                                                <!--begin::Title-->
                                                <div class="fs-5 fw-bold mb-2">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:;" class="text-dark text-wrap  me-1">{!! $conteudo->conteudo !!}</a>
                                                        <div>
                                                            <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+{{$conteudo->hora_aula}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="d-flex align-items-center fs-6">
                                                    <!--begin::Info-->
                                                    <div class="me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">{{date('d/m/Y', strtotime($conteudo->data))}}</span></div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="{{$conteudo->plataforma != '' ? $conteudo->plataforma:"Aula presencial"}}">
                                                        <img src="{{asset("assets/media/svg/social-logos/{$plataformas[$conteudo->plataforma]}")}}" alt="img" />
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Timeline heading-->
                                            <div class="pb-5">
                                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded p-7">
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="{{route('diario.conteudo.turma.disciplina.faltas',['conteudo' => $conteudo->id,'turma' => $turma->id, 'disciplina' => $disciplina->id])}}" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="me-1">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow"  data-acao="editar" data-id="{{$conteudo->id}}">Editar</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="">
                                                        <!--begin::Link-->
                                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                            <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar" data-periodo="{{$conteudo->periodo_id}}" data-horaaula="{{$conteudo->hora_aula}}" data-id="{{$conteudo->id}}" >Excluir</a>
                                                        </div>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Timeline content-->
                                    </div>
                            @endforeach
                            <!--end::Timeline item-->
                            </div>
                            <div class="my-5 text-center">
                                <button class="btn btn-primary  text-center" id="kt_ver_mais_4">
                                    <span class="indicator-label">Ver mais</span>
                                    <span class="indicator-progress">Aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <div class="mx-6 fs-6 fw-bold text-gray-500">Cadastrados <span class="badge badge-light-primary me-auto" id="total_aula_4">{{$conteudos4['total']}}</span> horas aulas.</div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Container-->
    </div>

@endsection
@once
    @push('js')
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{asset('assets/js/diario/conteudo/conteudo_form.js')}}"></script>
    @endpush
@endonce





