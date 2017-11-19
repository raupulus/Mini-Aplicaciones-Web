/**
* @author Raúl Caro Pastorino
* @author María Valderrama Rodríguez
* @copyright Copyright © 2017 Raúl Caro Pastorino
* @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
*/

// Expresiones regulares
const ENTERO = new RegExp("^[0-9]+$");
const REAL = new RegExp("^[0-9]+(,[0-9]+)?$");
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
            return comprobarIndividual(valor, CADENAS);

            case "email":
            return comprobarIndividual(valor, EMAIL);

            case "edad":
            return comprobarIndividual(valor, ENTERO) && valor.length < 3;

            case "telefono":
            return comprobarIndividual(valor, ENTERO) && valor.length < 10;

            case "web":
            return comprobarIndividual(valor, WEB);

            default:
            return false;
        }
    } else {
        return false;
    }
}

function comprobarIndividual(input, expresion) {
    return expresion.test(input);
}

function noVacio(input) {
    return input !== '' && input !== null;
}
