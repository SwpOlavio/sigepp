"use strict";
var Nota = (function () {
    var t,
        f,
        btnSalvar,
        e,
        v,
        n,
        form,
        periodoAtual,
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

            let formData = new FormData()
            let dadosInput = []
            form.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {
                let dado = {
                    alunoId: Number(input.dataset.aluno_id),
                    nota_id: Number(input.dataset.nota_id),
                    nota: Number(input.value),

                }
                dadosInput.push(dado)
            });

            console.log(dadosInput)

            formData.set("notas",JSON.stringify(dadosInput))
            formData.set("periodo_id",periodoAtual)

            formData.set("turma_id",turma_id)
            formData.set("disciplina_id",disciplina_id)

            formData.set("tipo_nota_id",tipo_nota_id)
            formData.set("data_nota",data_nota_formatada)
            formData.set("tipo_nota",tipo_nota)



            fetch(BaseUrl + "/diario/nota/cadastrar",{
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': document.getElementsByClassName('csrf-token')[0].content
                },
                body: formData
            }).then(response => response.json()).then(data => {
                //document.querySelector('#pedido_id').value = data.pedidoId
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
                    form.reset()
                })

            }).catch(error => {
                console.log(error)
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


        };

    var optionFormat = function(item) {
        if ( !item.id ) {return item.text;}
        var span = document.createElement('span');
        var template = '';
        template += "<span class='fs-5 text-gray-800'>"+item.text+"</span>";
        span.innerHTML = template
        return $(span);
    }
    $("#tipo_nota").select2({
        templateSelection: optionFormat,
        templateResult: optionFormat
    });




    return {
        init: function () {
            let modalNota = document.querySelector('#kt_modal_nota')
            let modal = new bootstrap.Modal(modalNota)
            form = document.querySelector("#formulario-notas")
            $("#data_nota").flatpickr({ enableTime: !1, dateFormat: "d/m/Y" })
            btnSalvar = document.querySelector("#btn_salvar_notas");
            btnSalvar.addEventListener('click', function (e){
                submit();
            });
            (n = FormValidation.formValidation(form, {
                fields: {
                    data: { validators: { notEmpty: { message: "Obrigatório" } } },
                    tipo: { validators: { notEmpty: { message: "Obrigatório" } } },
                },
                plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
            }))
            $(form.querySelector("[name='nota']")).on('change', function (){
                n.revalidateField('tipo')
            })
            validarNota()
        },
        getPeriodo: function (periodo){
            document.querySelector('#periodo').value = periodo
            periodoAtual = periodo
        }
    };
})();
KTUtil.onDOMContentLoaded(function () {
    Nota.init();

});
