/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
var cambio = 166.38; // Valor de un euro

function calculareuros() {
    var pesetas = parseFloat(document.getElementById('inputpesetas').value);
    var valoreuro = 0.0;

    if (isNaN(pesetas)) {
        valoreuro = 'Valor erróneo Introducido';
    } else {
        valoreuro = pesetas / cambio + " Euros";
    }

    document.getElementById('inputresultado').defaultValue = valoreuro;
}

function calcularpesetas() {
    var euros = parseFloat(document.getElementById('inputeuros').value);
    var valoreuro = 0.0;

    if (isNaN(euros)) {
        valorpesetas = 'Valor erróneo Introducido';
    } else {
        valorpesetas = euros * cambio + " Pesetas";
    }

    document.getElementById('inputresultado').defaultValue = valorpesetas;
}
