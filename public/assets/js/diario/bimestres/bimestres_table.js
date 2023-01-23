"use strict";
var TabelaTipoNota = (function () {
    var t,
        p,
        e,
        deletar = () => {
            t = document.querySelectorAll(".deletar")

            t.forEach(function (el) {
                el.addEventListener("click",function (e)  {
                    e.preventDefault()

                    if (el.dataset.salvo === "0"){
                        Swal.fire({
                            text: "Você quer deletar a avaliação ?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Sim, deletar!",
                            cancelButtonText: "Não, cancelar",
                            customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                        })
                            .then(function (t) {
                                if (t.value) {
                                    fetch(el.dataset.action).then(response => response.json())
                                        .then(data => {
                                            console.log(data)
                                            Swal.fire({
                                                text: data.data.message,
                                                icon: data.data.title, buttonsStyling: !1,
                                                confirmButtonText: "Ok, entendi!",
                                                customClass: { confirmButton: "btn fw-bold btn-primary" }
                                            }).then(function () {
                                                if (data.data.title === "success") {
                                                    el.parentNode.parentNode.parentNode.remove();
                                                }

                                            })
                                        });
                                }else {
                                    if ("cancel" === t.dismiss ){
                                        Swal.fire({ text: "A avaliação não foi deletada.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                                    }
                                }

                            });
                    }else{
                        Swal.fire({ text: "Limpar as médias bimestrais.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                    }
                })
            })

            e = document.querySelectorAll(".editar");
            e.forEach(function (el) {
                el.addEventListener("click",function (e)  {
                    if (el.classList.contains("bloquear")){
                        e.preventDefault()
                        Swal.fire({ text: "Limpar as médias bimestrais.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                    }
                })
            })

        }
    return {
        init: function () {
            deletar()
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    TabelaTipoNota.init();

});
