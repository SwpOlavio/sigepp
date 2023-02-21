"use strict";
var Nota = (function () {
    var t,
        f,
        btnSalvar,
        e,
        v,
        n,
        url,
        form,
        modal,
        objetoItem,
        cancelButton,
        tipoNotaInput,
        dataInput,
        periodoAtual,
        bimestreNotas,
        modalNota,
        formB1,
        formB2,
        formB3,
        formB4,
        submit = () => {
        v = false;
            form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {
                if (input.value > 10){
                    toastr.options = {
                        "preventDuplicates": true,
                    }
                    toastr.error("A nota máxima deve ser 10.0", "Erro" );
                    v = true;
                }
            });
            if (!v){
                n.validate().then(function (e) {
                    if ("Valid" == e){
                        btnSalvar.setAttribute("data-kt-indicator", "on")
                        btnSalvar.disabled = !0
                        cadastrarNotas()
                        //form.submit()
                    }
                })
            }
        },
        cadastrarNotas = () => {

            let turma_id = document.querySelector('[name=turma_id]').value
            let disciplina_id = document.querySelector('[name=disciplina_id]').value
            let data_nota = document.querySelector('[name=data_nota]').value
            let data_nota_formatada = data_nota.split('/').reverse().join('-')
            let tipo_nota = $('#tipo_nota').val()
            let tipo_nota_id = document.querySelector('#tipo_nota_id').value
            let periodo_id = document.querySelector('#periodo').value

            let formData = new FormData()
            let dadosInput = []
            form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {

                let dado = {
                    alunoId: Number(input.dataset.aluno_id),
                    nota_id: Number(input.dataset.nota_id),
                    nota: input.value !== "" ? Number(input.value) : "",
                }
                dadosInput.push(dado)
            });

            formData.set("notas",JSON.stringify(dadosInput))
            formData.set("tipo_nota_id",tipo_nota_id)
            formData.set("tipo_nota_tipo",tipo_nota)
            formData.set("tipo_nota_data",data_nota_formatada)

            formData.set("periodo_id",periodo_id)
            formData.set("turma_id",turma_id)
            formData.set("disciplina_id",disciplina_id)

            if (tipo_nota_id > 0) {
                url = BaseUrl + "/diario/nota/atualizar"
            }else{
                url = BaseUrl +  "/diario/nota/cadastrar"
            }


            fetch(url,{
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': document.getElementsByClassName('csrf-token')[0].content
                },
                body: formData
            }).then(response => response.json()).then(resultado => {
                //document.querySelector('#pedido_id').value = data.pedidoId
                console.log(resultado)
                if (!resultado.resposta){
                    Swal.fire({
                        text: resultado.msn.message,
                        icon:  resultado.msn.type,
                        buttonsStyling: false,
                        confirmButtonText: "Ok, Entendi!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (){
                        btnSalvar.removeAttribute("data-kt-indicator");
                        btnSalvar.disabled = !1

                    })
                    return
                }

                let listaBimestre = JSON.stringify(resultado)
                let data = resultado.data.split('-').reverse().join('/')
                let tipo = resultado.tipo
                let tipo_nota_id = resultado.tipo_nota_id

                btnSalvar.removeAttribute("data-kt-indicator");
                btnSalvar.disabled = !1
                Swal.fire({
                    text: "Notas salvas com sucesso",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, Entendi!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function (){

                    modal.hide()
                    form.reset()


                    let html = `
                     <div class="d-flex align-items-sm-center mb-7 item">
                          <div class="symbol symbol-50px me-5">
                            <span class="symbol-label bg-light-primary">
                                <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"/>
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"/>
                                        </svg>
                                        </span>
                                 </span>
                                  </div>
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">${tipo}</a>
                                            <span class="text-gray-700 fw-bold d-block fs-7">${data}</span>
                                        </div>
                                        <div class="d-flex align-items-center me-6" id="painel">
                                            <button type="button" onclick='Nota.getNotas(${listaBimestre}, this.parentNode.parentNode.parentNode)' class="editar btn btn-icon btn-light btn-active-color-primary btn-sm border-0 me-6" data-bs-toggle="modal" data-bs-target="#kt_modal_nota">
                                                <i class="fa-solid fa-pen fs-6"></i>
                                            </button>
                                            <button type="button" onclick='Nota.deletar(${tipo_nota_id}, this.parentNode.parentNode.parentNode)' class="remover btn btn-icon btn-light btn-active-color-danger btn-sm border-0">
                                                <i class="fa-solid fa-trash fs-6"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>`
                    if (objetoItem !== undefined) {
                        objetoItem.insertAdjacentHTML('afterend', html)
                        objetoItem.remove()
                    }else{
                        let b =  document.querySelector('#b1')
                        b.insertAdjacentHTML('beforeend', html)
                    }
                    objetoItem = undefined

                })

            }).catch(error => {
                console.log(error)
            })
        },
        deletar = (id, objeto) => {

            Swal.fire({
                text: "Você tem certeza que deseja excluir esta avaliação ?",
                icon: "warning",
                showCancelButton: !0,
                buttonsStyling: !1,
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Não, cancelar",
                customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
            })
                .then(function (t) {

                    if (t.value) {
                        fetch(BaseUrl + '/diario/nota/'+id+"/deletar").then(response => response.json())
                            .then(data => {

                                Swal.fire({
                                    text: data.data.message,
                                    icon: data.data.title, buttonsStyling: !1,
                                    confirmButtonText: "Ok, entendi!",
                                    customClass: { confirmButton: "btn fw-bold btn-primary" }
                                }).then(function () {
                                    objeto.remove()
                                })
                            });
                    }
                });
        },
        salvarMedia = () => {
            formB1.querySelectorAll('[data-media-filter="mediabim"]').forEach((btn) => {
                btn.addEventListener('click', function (e){
                    e.preventDefault()
                    btn.setAttribute("data-kt-indicator", "on")
                    btn.disabled = !0

                        Swal.fire({
                            text: "Você deseja salvar as médias?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Sim, salvar!",
                            cancelButtonText: "Não, cancelar",
                            customClass: { confirmButton: "btn fw-bold btn-primary", cancelButton: "btn fw-bold btn-active-light-primary" },
                        })
                            .then(function (t) {

                                if (t.value) {
                                    fetch(BaseUrl + '/diario/nota/'+btn.dataset.periodo_id+"/salvarmedia").then(response => response.json())
                                        .then(data => {
                                            console.log(data)
                                            Swal.fire({
                                                text: data.msn.message,
                                                icon: data.msn.title,
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, entendi!",
                                                customClass: { confirmButton: "btn fw-bold btn-primary" }
                                            }).then(function () {
                                                if (!data.salvo){
                                                    btn.disabled = !1
                                                }
                                                btn.removeAttribute("data-kt-indicator", "on")
                                                formB1.querySelector("[data-btn-filter='limparmediabim']").disabled = !1
                                                formB1.querySelector("[data-media-filter='notabim']").disabled = !0
                                                formB1.querySelectorAll(".editar").forEach((el) => el.disabled = !0)
                                                formB1.querySelectorAll(".remover").forEach((el) => el.disabled = !0)

                                            })
                                        });
                                }else{
                                    btn.removeAttribute("data-kt-indicator", "on")
                                    btn.disabled = !1
                                }
                            });
                });
            });
        },
        listarNotas = () => {


            $('.modal-alunos-notas').animate({scrollTop:0}, 'slow');

            document.querySelector('#titulo-notas').innerText = "Editar notas"
            document.querySelector('#periodo').value = bimestreNotas.periodo_id
            document.querySelector('#tipo_nota_id').value = bimestreNotas.tipo_nota_id
            periodoAtual = bimestreNotas.periodo_id

            tipoNotaInput.val(bimestreNotas.tipo).trigger('change')
            //console.log("data: " + bimestreNotas.data)
            dataInput.setDate(bimestreNotas.data)

            let listaNotas =  bimestreNotas.notasAlunos;

            form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {

                for (let i = 0; i < listaNotas.length; i++) {

                    if (Number(listaNotas[i].aluno_id) === Number(input.dataset.aluno_id)){
                        input.value = listaNotas[i].nota ?? ""
                        input.dataset.nota_id = listaNotas[i].id
                        break
                    }
                }
            })

        },
        validarNota = () => {
            form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {

                    let im = new Inputmask({ mask: ["9", "9.9", "99.9"],  numericInput: true})
                    im.mask(input);
                    input.addEventListener('keyup', function (e){
                        if (input.value >10){
                            input.classList.add("bg-light-danger");
                            input.classList.add("text-danger");
                            toastr.options = {
                                "preventDuplicates": true,
                            }
                            toastr.error("A nota máxima deve ser 10.0", "Erro" );
                        }else{
                            input.classList.remove("bg-light-danger");
                            input.classList.remove("text-danger");
                            toastr.clear()
                        }
                });
            });
        },
        notaRadio = () => {
            form.querySelectorAll('[name="nota_radio"]').forEach((radio) => {
                radio.addEventListener('click', function (){
                    if (radio.checked){
                        form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {
                            input.value = radio.value
                        })
                    }
                })

                // let im = new Inputmask({ mask: ["9", "9.9", "99.9"],  numericInput: true})
                // im.mask(input);
                // input.addEventListener('keyup', function (e){
                //     if (input.value >10){
                //         input.classList.add("bg-light-danger");
                //         input.classList.add("text-danger");
                //         toastr.options = {
                //             "preventDuplicates": true,
                //         }
                //         toastr.error("A nota máxima deve ser 10.0", "Erro" );
                //     }else{
                //         input.classList.remove("bg-light-danger");
                //         input.classList.remove("text-danger");
                //         toastr.clear()
                //     }
                // });
            });
        };

    var optionFormat = function(item) {
        if ( !item.id ) {return item.text;}
        var span = document.createElement('span');
        var template = '';
        //template += "<span class='fs-5 text-gray-800'>"+item.text+"</span>";
        template += `<span> ${item.element.getAttribute('data-imagem')} </span><span class='fs-5 text-gray-800'>${item.text}</span>`;
        span.innerHTML = template
        return $(span);
    }
    tipoNotaInput = $("#tipo_nota").select2({
        templateSelection: optionFormat,
        templateResult: optionFormat,
        minimumResultsForSearch: -1
    });


    return {
        init: function () {

            formB1 = document.getElementById('formulario_bim1');


            cancelButton = document.getElementById('kt_modal_cancelar');


            modalNota = document.querySelector('#kt_modal_nota')
            modal = new bootstrap.Modal(modalNota)
            form = document.querySelector("#formulario-notas")

            modalNota.addEventListener('hidden.bs.modal', function (event) {
                document.querySelector('#titulo-notas').innerText = "Cadastrar notas"
                document.querySelector('#tipo_nota_id').value = 0
                document.querySelector('#periodo').value = 0
                tipoNotaInput.val("Trabalho").trigger('change')
                form.reset()
            })

            dataInput = $("#data_nota").flatpickr({ enableTime: !1, dateFormat: "d/m/Y" })

            btnSalvar = document.querySelector("#btn_salvar_notas");
            btnSalvar.addEventListener('click', function (e){
                submit();
            });
            (n = FormValidation.formValidation(form, {
                fields: {
                    data_nota: { validators: { notEmpty: { message: "Obrigatório" } } },
                    tipo: { validators: { notEmpty: { message: "Obrigatório" } } },
                },
                plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
            }))
            $(form.querySelector("[name='tipo']")).on('change', function (){
                n.revalidateField('tipo')
            })
            validarNota()
            notaRadio()
            salvarMedia()
        },
        getPeriodo: function (objeto){
                document.querySelector('#periodo').value = objeto.dataset.periodo_id
                document.querySelector('#tipo_nota_id').value = 0
                let radios = document.querySelector('#radios')
                if (radios.classList.contains("d-none")){
                    radios.classList.remove('d-none')
                }

        },
        getNotas: function (notas, item){
            bimestreNotas = notas
            objetoItem = item

            console.log(notas)
            listarNotas()
            let radios = document.querySelector('#radios')
            if (!radios.classList.contains('d-none')){
                radios.classList.add('d-none')
            }
        },
        deletar: function (id, objeto){
            deletar(id, objeto)
        }

    };
})();
KTUtil.onDOMContentLoaded(function () {
    Nota.init();
});
