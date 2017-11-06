/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function CalcularBase() {
    var x = document.getElementById("entrada").value;

    //Condicional que pasará el filtro númerico y de A hasta F para base 16
    if ((/[^0-9,A-F,a-f]/g.test(x)) || x == "") {
        alert ("Introduce un valor numérico (0-9) o Hexadecimal (A-F)");
        document.getElementById("entrada").value = "";
        document.getElementById("entrada").focus();
        return false;
    }

    //Obtener Valor de Select de base de entrada
    var lista = document.getElementById("selectEntrada");
    var indiceSeleccionado = lista.selectedIndex;
    var opcionSeleccionada = lista.options[indiceSeleccionado];
    var valorSeleccionado = opcionSeleccionada.value;

    //Obtener Valor de Select de base de salida
    var lista2 = document.getElementById("selectSalida");
    var indiceSeleccionado2 = lista2.selectedIndex;
    var opcionSeleccionada2 = lista2.options[indiceSeleccionado2];
    var valorSeleccionado2 = opcionSeleccionada2.value;

    //Pasa Entrada según selección a base 10
    var entradaBase10 = parseInt(x, valorSeleccionado);
    //Ahora de base 10 pasamos a la selección 2
    var SALIDA = entradaBase10.toString(valorSeleccionado2);

    //Si utilizamos base 11 en adelante que convierta letras a mayúsculas
    if ( valorSeleccionado2 > 10 ) {
        SALIDA = SALIDA.toUpperCase();
    }

    //Comprueba que no es valor nulo
    if ( isNaN(entradaBase10) == false) {
        //Pintar Resultados
        var resultado = "El resultado en base <B>" + valorSeleccionado2 + "</B> es: <BR/>"
        var output = SALIDA;
        document.getElementById("tituloResultado").innerHTML = resultado;
        document.getElementById("ResultadoBase").innerHTML = output;
    } else {
        alert("Has introducido un valor no válido o seleccionada una base incorrecta para el valor introducido. Vuelve a intentarlo.");
        document.getElementById("entrada").value = "";
        document.getElementById("entrada").focus();
    }
}
