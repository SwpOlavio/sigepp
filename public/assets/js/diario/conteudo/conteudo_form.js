"use strict";
var GerenciaConteudo = (function () {
    var c, t, e, n, a, o,uc, editor,nItens = [],totalItens = [], html, btns = [] ;

    let optionsLocale = {
        weekdays: {
            shorthand: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
            longhand: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        },
        months: {
            shorthand: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            longhand: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        },
    }
    let acao = () => {
        ["#timeline_1","#timeline_2","#timeline_3","#timeline_4"].forEach((objeto) => {
            document.querySelector(objeto).addEventListener('click', function (e){
                   // e.preventDefault();
                    o = e.target.closest('.timeline-item')
                    let id = e.target.dataset.id;

                    if (e.target.dataset.acao === "editar"){

                        fetch(BaseUrl + '/diario/conteudo/'+id+"/edit").then(response => response.json())
                            .then(data => {
                                document.querySelector('#titulo_conteudo').textContent = 'Editar conteúdo'
                                document.querySelector('#conteudo_id').value = data.id
                                document.querySelector('#data').value = data.data
                                $('#hora_aula').val(data.hora_aula).trigger('change');
                                $('#tipo_aula').val(data.tipo_aula).trigger('change');
                                $('#periodo_id').val(data.periodo_id).trigger('change');
                                editor.root.innerHTML = data.conteudo;
                                KTUtil.scrollTop()
                                if (data.tipo_aula === "Não"){
                                    $('#plataforma').val(data.plataforma).removeAttr('disabled','disabled').trigger('change');
                                }else{
                                    $('#plataforma').val('').attr('disabled','disabled').trigger('change');
                                }
                            });


                    }else if (e.target.dataset.acao === "deletar"){
                        let horaaula = e.target.dataset.horaaula;
                        let periodo_id = e.target.dataset.periodo;
                        Swal.fire({
                            text: "Você quer deletar o conteúdo ?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Sim, deletar!",
                            cancelButtonText: "Não, cancelar",
                            customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                        }).then(function (t) {
                            if (t.value) {
                                fetch(BaseUrl + '/diario/conteudo/'+id+"/deletar").then(response => response.json())
                                    .then(data => {
                                        Swal.fire({
                                            text: data.data.message,
                                            icon: data.data.title, buttonsStyling: !1,
                                            confirmButtonText: "Ok, entendi!",
                                            customClass: { confirmButton: "btn fw-bold btn-primary" }
                                        }).then(function () {
                                            if (data.data.title === "success"){
                                                let total = document.querySelector('#total_aula_'+periodo_id).textContent;
                                                document.querySelector('#total_aula_'+periodo_id).textContent = parseInt(total) - parseInt(horaaula);
                                                o.remove()
                                            }
                                        })
                                    });
                            }else {
                                if ("cancel" === t.dismiss ){
                                    Swal.fire({ text:  "O conteúdo não foi deletado.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                                }
                            }
                        })
                    }
                })
            })
    }
    let submit = function (){
        let formData = new FormData();
        let id = document.querySelector('#conteudo_id').value
        formData.set("id",id);

        let turma_id = document.querySelector('input[name="turma_id"]').value;
        let disciplina_id = document.querySelector('input[name="disciplina_id"]').value;

        formData.set("data",document.querySelector('input[name="data"]').value);
        formData.set("hora_aula",document.querySelector('select[name="hora_aula"]').value);
        formData.set("tipo_aula",document.querySelector('select[name="tipo_aula"]').value);
        formData.set("plataforma",document.querySelector('select[name="plataforma"]').value);
        formData.set("periodo_id",document.querySelector('select[name="periodo_id"]').value);
        formData.set("turma_id",turma_id);
        formData.set("disciplina_id",disciplina_id);
        formData.set("conteudo",editor.root.innerHTML);

        if (editor.getLength() !== 1) {

            fetch(a.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.getElementsByClassName('csrf-token')[0].content
                },
                body: formData

            }).then(response => response.json()).then(data => {
                html = '';
                t.removeAttribute("data-kt-indicator"),
                    (t.disabled = !1),
                    Swal.fire({
                        text: data.data.message,
                        icon: data.data.title,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, entendi!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (t) {
                        if (data.data.title === 'success') {
                            let conteudo = data.conteudo;

                            let plataforma = conteudo.plataforma !== '' ? conteudo.plataforma : "Aula presencial"
                            let plataformas = {
                                'Google Classroom': 'google-classroom.svg',
                                'Grupos WhatsApp': 'whatsapp.svg',
                                'YouTube': 'youtube.svg',
                                'Google Meet': 'meet.svg',
                                'Entrega de materiais impressos': 'math.svg',
                                '': 'school.svg'
                            };
                            let index = conteudo.plataforma !== null || conteudo.plataforma !== '' ? conteudo.plataforma : ''
                            let logo = plataformas[index]
                            html = `<div class="timeline-item item_${conteudo.periodo_id}" >
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon  svg-icon-2 svg-icon-primary">
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
                                                    <a href="#" class="text-dark text-wrap  me-1">${conteudo.conteudo}</a>
                                                    <div>
                                                        <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+${conteudo.hora_aula}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class=" me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">${conteudo.data}</span></div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="${plataforma}">
                                                    <img src="${BaseUrl + '/assets/media/svg/social-logos/' + logo}" alt="img" />
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
                                                        <a href="${BaseUrl}/diario/conteudo/${conteudo.id}/turma/${turma_id}/disciplina/${disciplina_id}/faltas" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="me-1">
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow" data-acao="editar" data-id="${conteudo.id}">Editar</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="">
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar" data-periodo="${conteudo.periodo_id}" data-horaaula="${conteudo.hora_aula}"  data-id="${conteudo.id}">Excluir</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            document.querySelector('#timeline_'+conteudo.periodo_id).insertAdjacentHTML('afterbegin', html)
                            let total = document.querySelector('#total_aula_'+conteudo.periodo_id).textContent;
                            document.querySelector('#total_aula_'+conteudo.periodo_id).textContent = parseInt(total) + parseInt(conteudo.hora_aula);
                           if (id > 0) {
                               o.remove();
                           }
                            limparForm();
                            ["#timeline_1","#timeline_2", "#timeline_3","#timeline_4"].forEach((e) => {
                                document.querySelector(e).querySelectorAll('[data-delete="deletar"]').forEach((e) => {
                                    e.removeEventListener('click');
                                });
                            });
                        }

                    });
            }).catch(error => {
                setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                        (t.disabled = !1),
                        Swal.fire({
                            text: "Desculpe, parece que alguns erros foram detectados.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, entendi!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (t) {
                            limparForm()
                        });
                }, 2e3)
            })
        }else{
            t.removeAttribute("data-kt-indicator"),
                (t.disabled = !1),
                Swal.fire({
                    text: "O conteúdo é obrigatório",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, entendi!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    } })
        }
    }
    let listar = (c, indice) => {

        nItens[indice] = document.getElementsByClassName('item_'+indice).length;
        totalItens[indice] = nItens[indice];


        let formdata = new FormData();
        formdata.set('offset', nItens[indice]);
        formdata.set('periodo_id', indice);

        let turma_id = document.querySelector('input[name="turma_id"]').value;
        let disciplina_id = document.querySelector('input[name="disciplina_id"]').value;
        formdata.set('turma_id', turma_id);
        formdata.set('disciplina_id', disciplina_id);

        html = '';

        fetch(BaseUrl + "/diario/conteudo/listar", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.getElementsByClassName('csrf-token')[0].content
            },
            body: formdata,
        }).then(response => response.json())
            .then(data => {

                totalItens[indice] += data.length;

                if (nItens[indice] === totalItens[indice]){
                    console.log('Finalizou');
                    c.classList.add('d-none');
                }
                data.forEach((e, i) => {

                    let conteudo = e;

                    let plataforma = conteudo.plataforma !== '' ? conteudo.plataforma : "Aula presencial"
                    let plataformas = {
                        'Google Classroom': 'google-classroom.svg',
                        'Grupos WhatsApp': 'whatsapp.svg',
                        'YouTube': 'youtube.svg',
                        'Google Meet': 'meet.svg',
                        'Entrega de materiais impressos': 'math.svg',
                        '': 'school.svg'
                    };
                    let index = conteudo.plataforma !== null || conteudo.plataforma !== '' ? conteudo.plataforma : ''
                    let logo = plataformas[index]
                    html = `<div class="timeline-item item_${indice}" >
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon  svg-icon-2 svg-icon-primary">
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
                                                    <a href="#" class="text-dark text-wrap  me-1">${conteudo.conteudo}</a>
                                                    <div>
                                                        <a href="javascript:;" class="badge badge-light-primary min-h-5px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Hora aula">+${conteudo.hora_aula}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class=" me-2 fs-7">Data da aula: <span class="text-primary fw-bolder">${conteudo.data}</span></div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-20px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="${plataforma}">
                                                    <img src="${BaseUrl + '/assets/media/svg/social-logos/' + logo}" alt="img" />
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
                                                        <a href="${BaseUrl}/diario/conteudo/${conteudo.id}/turma/${turma_id}/disciplina/${disciplina_id}/faltas" class="btn btn-sm btn-light-primary btn-shadow">Faltas</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="me-1">
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="javascript:;" class="btn btn-sm btn-light-primary btn-shadow" data-acao="editar" data-id="${conteudo.id}">Editar</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="">
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="javascript:;" class="btn btn-sm btn-light-danger btn-shadow" data-acao="deletar" data-periodo="${conteudo.periodo_id}" data-horaaula="${conteudo.hora_aula}"  data-id="${conteudo.id}">Excluir</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                    document.querySelector('#timeline_'+indice).insertAdjacentHTML('beforeend', html)
                    KTUtil.scrollTo(c, 200);
                });
                limparForm();
                c.removeAttribute("data-kt-indicator")
            });

    }
    let limparForm = () => {
        document.querySelector('#titulo_conteudo').textContent = 'Cadastrar conteúdo';
        document.querySelector('#data').value = '';
        $('#hora_aula').val("").trigger('change');
        $('#tipo_aula').val("Sim").trigger('change');
        $('#plataforma').val("").attr('disabled','disabled').trigger('change');
        $('#periodo_id').val("").trigger('change');
        editor.setText('');
        document.querySelector('#conteudo_id').value = 0
    }
    let tab = () => {
        ['#kt_tab_bimestre_1','#kt_tab_bimestre_2','#kt_tab_bimestre_3','#kt_tab_bimestre_4'].forEach((el) => {
            document.querySelector(el).addEventListener('click',function (e)  {
                limparForm()
            })
        })
    }
    let getUltimoConteudo = (url) =>{
        fetch(url).then(response => response.json())
            .then(data => {
                editor.root.innerHTML = data.conteudo;
            });
    }

    return {
        init: function () {
            ['#kt_ver_mais_1','#kt_ver_mais_2','#kt_ver_mais_3','#kt_ver_mais_4'].forEach((el,index) => {
                    index++;
                    btns[index] =  document.querySelector(el);
                    btns[index].addEventListener("click", function (e) {
                        e.preventDefault();
                        btns[index].setAttribute("data-kt-indicator", "on")
                        listar(btns[index],index);
                })
            })
            tab();
            acao();
                $('#tipo_aula').on('select2:select', function (e) {
                  if (e.params.data.text === 'Sim'){
                      $('#plataforma').val('').trigger('change').attr('disabled','disabled')
                  }else{
                      $('#plataforma').removeAttr('disabled').val('Google Classroom').trigger('change')
                  }
                });
                let edt = document.querySelector('#kt_ecommerce_add_product_meta_description');
                editor = new Quill(edt, {
                    modules: {
                        toolbar: [
                            [{ 'size': [false, 'large'] }],
                            ["bold", "italic", "underline"],
                        ]
                    },
                    placeholder: "Escreva aqui...",
                    theme: "snow"
                }),

            ((a = document.querySelector("#kt_conteudo_form")),
                (t = document.getElementById("kt_conteudo_cadastrar")),
                (e = document.getElementById("kt_conteudo_cancelar")),
                (uc = document.getElementById("ultimo_conteudo")),

                uc.addEventListener("click", function (e) {
                    e.preventDefault(),
                        console.log()
                        getUltimoConteudo(uc.dataset.action)
                }),

                $(a.querySelector('[name="data"]')).flatpickr(
                    {
                        enableTime: !1,
                        dateFormat: "d/m/Y",
                        firstDayOfWeek: 1,
                        //allowInput: true, // habilitar input para digitar a data
                        locale: optionsLocale,
                        disable: [
                            function (date){
                                return date.getDay() === 0
                            }
                        ]
                    }),
                (n = FormValidation.formValidation(a, {
                    fields: {
                        data: {
                            validators: {
                                date: {
                                    format: 'DD/MM/YYYY',
                                    message: 'Data inválida'
                                },
                                notEmpty: { message: "A Data da aula é obrigatória",}
                            }
                        },
                        hora_aula: { validators: { notEmpty: { message: 'A hora aula é obrigatória' } } },
                        tipo_aula: { validators: { notEmpty: { message: 'O tipo de aula é obrigatório' } } },
                        periodo_id: { validators: { notEmpty: { message: 'O bimestre é obrigatório' } } },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5(
                            { rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                    },
                })),

                t.addEventListener("click", function (e) {
                    e.preventDefault(), n && n.validate().then(function (e) {
                            "Valid" == e ?
                                (t.setAttribute("data-kt-indicator", "on"),
                                        (t.disabled = !0),
                                        submit()
                                )
                                : Swal.fire({
                                    text: "Desculpe, parece que alguns erros foram detectados. Tente novamente.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, entendi!",
                                    customClass: { confirmButton: "btn btn-primary" },
                                });
                    });
                }),
                e.addEventListener("click", function (t) {
                    t.preventDefault();
                        Swal.fire({
                            text: "Tem certeza de que deseja limpar o formulário ?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, limpar!",
                            cancelButtonText: "Não, voltar",
                            customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
                        }).then(function (t) {
                            if (t.value){
                                limparForm()
                            }else if ("cancel" === t.dismiss){
                                Swal.fire({ text: "Seu formulário não foi limpo!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn btn-primary" } });
                            }
                        });
                }))
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    GerenciaConteudo.init();
});
