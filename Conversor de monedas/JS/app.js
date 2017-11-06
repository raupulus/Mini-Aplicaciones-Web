/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function calculareuros() {
    var factor = 166.38;
    var euros = document.getElementById('inputeuros').value;
    var pesetas = document.getElementById('inputpesetas').value;
    var valoreuro = pesetas / factor +" Euros";
    document.getElementById('inputresultado').defaultValue=valoreuro;
}

function calcularpesetas() {
    var factor = 166.38;
    var euros = document.getElementById('inputeuros').value;
    var pesetas = document.getElementById('inputpesetas').value;
    var valorpesetas = euros * factor+" Pesetas";
    document.getElementById('inputresultado').defaultValue=valorpesetas;
}
