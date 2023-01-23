"use strict";
var TabelaTurmaDisciplina = (function () {
    var t,
        f,
        a,
        e,
        v,
        n,
        submit = () => {
        v = false;
            t.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {
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
                        a.setAttribute("data-kt-indicator", "on")
                        a.disabled = !0
                        f.submit()
                    }
                })
            }
        },
        validarNota = () => {
            t.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {

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
    return {
        init: function () {
            f = document.querySelector("#formulario");
            $("#data_nota").flatpickr({ enableTime: !1, dateFormat: "d/m/Y" }),
            a = document.querySelector("#btn_salvar_notas");
            a.addEventListener('click', function (e){
                submit();
            });
            (n = FormValidation.formValidation(f, {
                fields: {
                    data: { validators: { notEmpty: { message: "A data é obrigatória" } } },
                    tipo: { validators: { notEmpty: { message: "O tipo de avaliação é obrigatório" } } },
                },
                plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
            })),
            (t = document.querySelector("#kt_nota_table")) &&
            ((e = $(t).DataTable({
                info: !1,
                order: [],
                    paging: false,
                pageLength: 10,
                columnDefs: [
                ]
            })),
                validarNota()

            );
        },
        tabela: function (){
            return tabela()
        }
    };
})();
KTUtil.onDOMContentLoaded(function () {
    TabelaTurmaDisciplina.init();

});
