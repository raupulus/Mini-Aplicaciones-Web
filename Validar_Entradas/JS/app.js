/**
* @author Raúl Caro Pastorino
* @copyright Copyright © 2017 Raúl Caro Pastorino
* @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
*/

// Expresiones regulares
const ENTERO = new RegExp("^[0-9]+$");
const REAL = new RegExp("^[0-9]+(,[0-9]+)?$");
const TELEFONO = new RegExp("^[0-9]{9}$");
const CADENA = new RegExp("^[a-záéíóúñ]+", "i");
const CADENAS = new RegExp("^[a-záéíóúñ]+(( [a-záéíóúñ]+)+)?$", "i");
const ALFANUMERICO = new RegExp("^[a-z0-9]+$", "i");
const WEB = new RegExp("(http(s)?:\/\/)?(www\.)?.+.{2,3}");
const EMAIL = new RegExp("^[a-zA-Z0-9_-]{2,63}@[a-zA-Z0-9]{2,63}\.[a-z]{2,4}$");

// Comprueba que cumple los requisitos un campo de formulario
// Necesita el valor y el tipo de campo a comprobar
function comprobar(valor, tipo_comprobacion) {
    if (noVacio(valor)) {
        switch(tipo_comprobacion) {
            case "nombre":
            return comprobarNombre(valor);

            case "email":
            return comprobarEmail(valor);

            case "edad":
            return comprobarEdad(valor);

            case "telefono":
            return comprobarTelefono(valor);

            case "web":
            return comprobarWeb(valor);

            default:
            return false;
        }
    } else {
        return false;
    }
}

function noVacio(input) {
    return input !== '' || input !== null;
}

function comprobarNombre(input) {
    return CADENAS.test(input);
}

function comprobarEmail(input) {
    return EMAIL.test(input);
}

function comprobarEdad(input) {
    return ENTERO.test(input) && input.length < 3;
}

function comprobarTelefono(input) {
    return TELEFONO.test(input);
}

function comprobarWeb(input) {
    return WEB.test(input);
}


/*********************************************************
Lo siguiente no se usa, está obsoleto
**********************************************************/


// Función vieja que debe quedar automatizada
function AnteriorComprobar() {
    var nombre = document.FormularioTest.nombre;
    var email = document.FormularioTest.email;
    var sugerencia = document.FormularioTest.sugerencia;

    // Expresiones regulares
    var testnum = new RegExp("^[0-9]+$");
    var testchar = new RegExp("^[a-z A-Z]+$");
    var tescharnum = new RegExp("^[a-z A-Z0-9]+$");
    var tesmail = new RegExp("^[a-zA-Z0-9]{2,63}@[a-zA-Z0-9]{2,63}\.[a-z]{2,4}$");

    // Nombre → Solo permitir a-Z
    if ((nombre.value.length == 0) || (! testchar.test(nombre.value))){
        alert("Tiene que escribir su nombre");
        nombre.focus();
        return false;
    }

    // Email → Permitir a-Z0-9
    if ((email.value.length == 0) || (! tesmail.test(email.value))) {
        alert("El email no debe estar vacío o incompleto");
        email.focus();
        return false;
    }

    // Sugerencia → Permitir a-Z0-9
    if (sugerencia.value.length == 0) {
        alert("No puede enviar una sugerencia vacía");
        sugerencia.focus();
        return false;
    } else if (! tescharnum.test(sugerencia.value)) {
        alert('Ha introducido valores no permitidos');
        sugerencia.focus();
        return false;
    }

    return true;
}
