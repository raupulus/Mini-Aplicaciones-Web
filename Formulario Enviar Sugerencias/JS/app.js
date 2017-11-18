/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function validarFormulario() {
    var nombre = document.FormSugerencia.nombre;
    var email = document.FormSugerencia.email;
    var sugerencia = document.FormSugerencia.sugerencia;

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
