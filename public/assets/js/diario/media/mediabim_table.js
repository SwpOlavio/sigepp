"use strict";
var TabelaMediaBim = (function () {
    var t,
        f,
        a,
        e,
        v,
        l,
        n,
        submit = () => {
        v = false;
            // t.querySelectorAll('[data-nota-filter="nota"]').forEach((input) => {
            //     if (input.value > 10){
            //         toastr.options = {
            //             "preventDuplicates": true,
            //         }
            //         toastr.error("A nota máxima deve ser 10.0", "Erro" );
            //         v = true;
            //     }
            // });
            if (!v){
                a.setAttribute("data-kt-indicator", "on")
                a.disabled = !0
                f.submit()
            }
        },
        limpar = () => {
            let turma_id = document.querySelector("#turma_id").value;
            let disciplina_id = document.querySelector("#disciplina_id").value;
            let periodo = document.querySelector("#periodo_id").value;

            l.setAttribute("data-kt-indicator", "on")
            l.disabled = !0

            fetch(BaseUrl + `/diario/mediabim/turma/${turma_id}/disciplina/${disciplina_id}/periodo/${periodo}/limpar`)
                .then(resposta => resposta.json())
                .then(data => {
                    l.removeAttribute("data-kt-indicator"),
                        (l.disabled = !1),
                    Swal.fire({
                        text: data.data.message,
                        icon: data.data.title,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, entendi!",
                        customClass: { confirmButton: "btn btn-primary" },
                    }).then(function () {
                        window.location.href = BaseUrl + `/diario/tipoNota/turma/${turma_id}/disciplina/${disciplina_id}`
                    });
                })

        }
    return {
        init: function () {
            f = document.querySelector("#formulario");
            a = document.querySelector("#btn_salvar_medias");
            l = document.querySelector("#btn_limpar_medias");
            l.addEventListener('click', function (e){
                limpar();
            });
            a.addEventListener('click', function (e){
                submit();
            });
            (t = document.querySelector("#kt_nota_table")) &&
            ((e = $(t).DataTable({
                info: !1,
                order: [],
                    paging: false,
                pageLength: 10,
                columnDefs: [
                ]
            }))
            );
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    TabelaMediaBim.init();

});
