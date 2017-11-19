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
const PASS = new RegExp("^[0-9a-zA-Z\,\._-]+$");
const WEB = new RegExp("^(http(s)?:\/\/)?([w]{3}[\.])?[a-z0-9]+[\.][a-z]{2,3}$");
const EMAIL = new RegExp("^[a-zA-Z0-9_-]{2,63}@[a-zA-Z0-9]{2,63}[\.][a-z]{2,4}$");


/**
* Comprueba que el valor introducido cumple con un patrón determinado, que se
* indicará con la variable "tipo_comprobación".
*
* Los tipos a comprobar son: [nombre] o [texto], [email], [edad], [telefono],
* [web] y [password].
*
* @param  {mixed}  valor               Valor a comprobar.
* @param  {string} tipo_comprobacion   La comprobación a hacer.
* @return {bool}                       Devuelve true si cumple la
*                                      comprobación, o false si no.
*/
function comprobar(valor, tipo_comprobacion) {
    if (noVacio(valor)) {
        switch(tipo_comprobacion) {
            case "nombre" || "texto":
            return comprobarIndividual(valor, CADENAS);

            case "email":
            return comprobarIndividual(valor, EMAIL);

            case "edad":
            return comprobarIndividual(valor, ENTERO) && valor.length < 3;

            case "telefono":
            return comprobarIndividual(valor, ENTERO) && valor.length == 9;

            case "web":
            return comprobarIndividual(valor, WEB);

            case "password":
            return comprobarIndividual(valor, PASS);

            default:
            return false;
        }
    } else {
        return false;
    }
}

/**
* Comprueba individualemente si un valor introducido cumple una expresión.
* @param  {mixed}  input       Valor a comprobar.
* @param  {RegExp} expresion   Expresión regular para la comprobación.
* @return {bool}               Devuelve true si cumple la comprobación, o
*                              false si no.
*/
function comprobarIndividual(input, expresion) {
    return expresion.test(input);
}

/**
* Comprueba que el valor introducido no es una cadena vacía ni nulo.
* @param  {mixed} input    Valor a comprobar.
* @return {bool}           Devuelve false si es una cadena vacía o null, o
*                          true si no.
*/
function noVacio(input) {
    return input !== '' && input !== null;
}
