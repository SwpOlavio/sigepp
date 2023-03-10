"use strict";
var Bimestre = (function () {

    var t,
        modalElemento,
        modal,
        e,
        formB1,
        formB2,
        formB3,
        formB4,
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

        },
        limparMediaBim = (bimestre, form) => {
            form.querySelectorAll("[data-btn-filter='limparmediabim']").forEach(function (el){
            el.addEventListener("click", function (e){
                e.preventDefault()

                let periodo_id = el.dataset.periodo_id
                Swal.fire({
                    text: "Você tem certeza que quer limpar o 1 bimestre?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Sim, limpar!",
                    cancelButtonText: "Não, cancelar",
                    customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                })
                    .then(function (t) {

                        if (t.value) {
                            fetch(BaseUrl + '/diario/bimestres/limparmediaBim/periodo/'+periodo_id).then(response => response.json())
                                .then(data => {
                                    Swal.fire({
                                        text: data.data.message,
                                        icon: data.data.title, buttonsStyling: !1,
                                        confirmButtonText: "Ok, entendi!",
                                        customClass: { confirmButton: "btn fw-bold btn-primary" }
                                    }).then(function () {
                                        form.querySelector("[data-media-filter='mediabim']").disabled = !1
                                        form.querySelector("[data-media-filter='notabim']").disabled = !1
                                        formB1.querySelectorAll(".editar").forEach((el) => el.disabled = !1)
                                        formB1.querySelectorAll(".remover").forEach((el) => el.disabled = !1)
                                        el.disabled = !0;
                                    })
                                });
                        }
                    });
            })
        })

        },
        visualizarMediaBim = (bimestre, form) => {

            texto_bimestre

            form.querySelectorAll("[data-btn-filter='visualizarmediaBim']").forEach(function (el) {
                el.addEventListener("click", function (e) {
                    e.preventDefault()

                    let periodo_id = el.dataset.periodo_id

                    fetch(BaseUrl + '/diario/bimestres/visualizarmediaBim/periodo/' + periodo_id).then(response => response.json())
                        .then(data => {

                            modalElemento.querySelector('#texto_bimestre').innerText = `${bimestre}° Bimestre`

                            let html = '';
                            let tipos = '<th class="ps-4 min-w-300px rounded-start">Nome</th>';

                            data.tipos.forEach(function (item){
                                tipos += `<th class="min-w-50px text-center">${item.tipo}</th>`
                            })
                            tipos += `<th class="w-50px text-center">Média</th>
                                   <th class="min-w-50px text-center">Status</th>`;

                            let thead_tipos = modalElemento.querySelector('#head_tr_tipos')
                            thead_tipos.innerText = "";
                            thead_tipos.insertAdjacentHTML('beforeend', tipos)

                            let lista_medias = modalElemento.querySelector('#notas_alunos')
                            lista_medias.innerHTML = "";

                            let lista = []
                            let numNotas = data.tipos.length



                            data.medias.forEach(function (item){

                                let listaNotas = []
                                if (numNotas > 0){
                                    listaNotas.push(item.nota1)
                                }
                                if (numNotas > 1){
                                    listaNotas.push(item.nota2 !== null ? item.nota2 : (item.recuperacao !== null ? item.recuperacao : '-'))
                                }
                                if (numNotas > 2){
                                    listaNotas.push(item.nota3 !== null ? item.nota3 : (item.recuperacao !== null ? item.recuperacao : '-'))
                                }
                                if (numNotas > 3){
                                    listaNotas.push(item.nota4 !== null ? item.nota4 : (item.recuperacao !== null ? item.recuperacao : '-'))
                                }
                                if (numNotas > 4){
                                    listaNotas.push(item.recuperacao !== null ? item.recuperacao:'-')
                                }

                                 html = `
                                    <tr>
                                          <td class="text-center">
                                               <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label bg-light">
                                                            <img src= ${BaseUrl + "/assets/media/svg/avatars/001-boy.svg"} class="h-75 align-self-end" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column align-items-start">
                                                        <a href="#" class="fw-bold text-hover-primary mb-1 texto ${item.status_aluno === "MTR" ? "text-dark ":"text-decoration-line-through text-danger"}">${item.nome}</a>
                                                        <div>
                                                        <span class="text-muted fw-semibold fs-7">Numero: ${item.numero}</span>
                                                        <span class="text-muted fw-semibold fs-7"> - Status: ${item.status_aluno !== "MTR" ? " Transferido": item.status_aluno}</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>`;
                                    data.tipos.forEach(function (item2,i){

                                        html += `<th class="min-w-50px text-center">${ item.status_aluno === "MTR" ? listaNotas[i].replace(".",",") : "-"}</th>`
                                    })

                                 html += `<td class="text-center">
                                               <div class="w-50px text-center">
                                                    <input readonly type="text" class="form-control texto form-control-solid text-center text-gray-800
                                                ${item.status_aluno === "MTR" ? "bg-light-primary":"bg-light-danger"} " value="${item.status_aluno === "MTR" ? item.media.replace(".",",") : "-"}"/>
                                              </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:;" class="badge ${item.status_aluno !== "MTR" ? "badge-light-warning text-warning" : (item.status_sigla === "ACM" ?
                                     "badge-light-success text-success":"badge-light-danger text-danger")}  fw-bold  mb-1 ">${item.status_aluno !== "MTR" ? item.status_aluno : item.status_sigla}</a>
                                            </td>
                                        </tr>`;

                                lista_medias.insertAdjacentHTML('afterbegin', html)

                            })
                            modal.show()
                        });

                })
            })
        }
        let formartarDecimalBr = function (numero){
            return numero.toString().replace(".",",")
        }

    return {
        init: function () {
            formB1 = document.getElementById('formulario_bim1');
            formB2 = document.getElementById('formulario_bim2');
            formB3 = document.getElementById('formulario_bim3');
            formB4 = document.getElementById('formulario_bim4');

            modalElemento = document.getElementById('kt_modal_media_visualizar');
            modal = new bootstrap.Modal(modalElemento)


            limparMediaBim(1, formB1)
            limparMediaBim(2, formB2)
            limparMediaBim(3, formB3)
            limparMediaBim(4, formB4)

            visualizarMediaBim(1, formB1)
            visualizarMediaBim(2, formB2)
            visualizarMediaBim(3, formB3)
            visualizarMediaBim(4, formB4)

            //deletar()
        }

    };
})();
KTUtil.onDOMContentLoaded(function () {
    Bimestre.init();

});
