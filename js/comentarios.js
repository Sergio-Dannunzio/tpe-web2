"use strict";

let id = document.querySelector(`input[name="idComentarioProducto"]`).value;
let logged = document.querySelector('input[name="permisos"]').value;

const body = document.getElementById("crearComentarios");
let array = [];

document.addEventListener('DOMContentLoaded', () => {

    getComentarios();

    document.getElementById("agregarComentario").addEventListener('submit', e => {
        e.preventDefault();
        addComentario();
    })
})

    function getComentarios() {  
        fetch('api/comentario'+"/"+id)
            .then(response => response.json())
            .then(comentarios => createCommentHTML(comentarios))
            .catch(error => console.log(error));
    }

    function createCommentHTML(comentarios) {
        let content = document.querySelector("#crearComentarios");
        content.innerHTML = "";
        for(let comentario of comentarios) {
            let data = {
               comentario: `${comentario.comentario}`,
               puntaje:   `${comentario.puntaje}`,
               id_producto: `${comentario.id_producto}`
            }
            array.push(data);
        }

            if(comentarios.length != 0){
                for(let comentario of comentarios){
                    let boton = document.createElement("button");
                    boton.innerText = "Borrar";
                    boton.classList.add('btn');
                    boton.classList.add('btn-danger');
                    let nodotr = document.createElement("tr");

                    let nodotd1 = document.createElement("td");
                    let nodotd2 = document.createElement("td");
                    let nodotd3 = document.createElement("td");
                    nodotd1.innerHTML = `${comentario.comentario}`;
                    nodotd2.innerHTML = `${comentario.puntaje}`;

                    nodotr.id_comentario = `${comentario.id_comentario}`;
                    if(logged == 1){
                        boton.addEventListener("click", e => eliminar(comentario.id_comentario));            
                        nodotr.appendChild(nodotd1);
                        nodotr.appendChild(nodotd2);

                        nodotd3.appendChild(boton);
                        nodotr.appendChild(nodotd3);
                    }else if(logged == 2){
                        nodotr.appendChild(nodotd1);
                        nodotr.appendChild(nodotd2);

                    }
                    body.appendChild(nodotr);        
            }
            }
    }

    function addComentario() {
        let comentario = document.querySelector('input[name="comentario"]');
        let puntaje = document.querySelector('select[name="puntaje"]');
        let id = document.querySelector('input[name="idComentarioProducto"]');
        if((comentario.value && puntaje.value) != ""){
            let data = {
                comentario: comentario.value,
                puntaje: puntaje.value,
                id_producto: id.value
            }
            fetch('api/comentario', {
                "method": "POST",
                "headers": { "Content-Type": "application/json" },
                "body": JSON.stringify(data)
            })
                .then(response => response.json())
                .then(function () {
                    getComentarios()
                }).catch(function (e) {
                    console.log(e)
                })
        }
    }

    function eliminar(id) {
        fetch('api/borrarComentario' + "/"  + id, {
            "method": "DELETE",
            "mode": 'cors',
        })  .then(response => response.json())
            .then(function () {
                getComentarios();
        }).catch(function (e) {
            console.log(e)
        })
    }
    
