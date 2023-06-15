"use strict";

async function procesarResultado(evt) {
    evt.preventDefault();
    alert("usted esta realizando una operacion");

    let divResultado = document.getElementById("divResultado");
    const operadorA = document.getElementById("operadorA").value;
    const operadorB = document.getElementById("operadorB").value;
    const operando = document.getElementById("operando").value;
    const url = operando + '/' + operadorA + '/' + operadorB;

    // hago el llamado ajax al php (servidor)
    let response = await fetch(url, {
        method: 'get'
    });
    let html = await response.text();

    // inserto la respuesta en el html
    divResultado.innerHTML = '<p>El resultado es: '+html+'</p>';  
}

document.getElementById("formulario").addEventListener("submit", procesarResultado);


document.getElementById("ver_cambios").addEventListener("submit", mostrar);

alert ("paso el tiempo");