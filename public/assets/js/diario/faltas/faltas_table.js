"use strict";
var TabelaMatricula = (function () {
    var t,
        e;
    return {
        init: function () {
            let form = document.querySelector('#formulario');
            let btn = document.querySelector('#btn_salvar_faltas');
            btn.addEventListener('click',function (e) {
                e.preventDefault()
                btn.setAttribute("data-kt-indicator", "on")
                btn.disabled = !0
                form.submit()
            });

            (t = document.querySelector("#kt_matricula_table")) &&
            ((e = $(t).DataTable({
                info: !1,
                order: [],
                paging: false,
                pageLength: 10,
                columnDefs: [
                    // { className: 'text-center pe-0', targets: "_all"} // estiliza todas as colunas
                ]
            }))
            );
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    TabelaMatricula.init();


});
