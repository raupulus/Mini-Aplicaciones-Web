/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function calculararea() {
    var base = document.getElementById('inputbase').value;
    var altura = document.getElementById('inputaltura').value;
    var resultado = "El área es:  " + base * altura + " m2";
    document.getElementById('inputresultado').defaultValue=resultado;
}
