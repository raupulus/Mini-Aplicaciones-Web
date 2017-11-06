/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
var cambio = 166.38; // Valor de un euro

function calculareuros() {
    var pesetas = document.getElementById('inputpesetas').value;
    // TOFIX → Limpiar entrada y mostrar alert si no son números, en el caso de venir una coma cambiar por un punto para que sea flotante
    var valoreuro = pesetas / cambio +" Euros";
    document.getElementById('inputresultado').defaultValue=valoreuro;
}

function calcularpesetas() {
    var euros = document.getElementById('inputeuros').value;
    // TOFIX → Limpiar entrada y mostrar alert si no son números, en el caso de venir una coma cambiar por un punto para que sea flotante
    var valorpesetas = euros * cambio+" Pesetas";
    document.getElementById('inputresultado').defaultValue=valorpesetas;
}
