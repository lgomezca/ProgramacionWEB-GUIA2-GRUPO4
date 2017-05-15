/*------------------Función para  Validar campos vacios-----------------*/
/*jslint devel: true */
/*jslint browser:true */
function validarCamposFormulario() {
    "use strict";
    var j = 0;
    var error = false;
    var msj = "Complete los siguientes campos\n\r\n";
    var elementos = document.forms[0].elements;
    /*Recorremos los elementos del formulario
       validando si su longitu es igual a Cero*/
    while (j < elementos.length) {
        if (elementos[j].value.length === 0 && elementos[j].id !== "submit") {
            msj += elementos[j].id + "\n";
            error = true;
        }
        j = j + 1;
    }
    if (error === true) {
        alert(msj);
        return false;
    }
    alert("Gracias " + document.forms[0].elements[0].value + " por registrarse en nuestra pagina ")
    return;
}