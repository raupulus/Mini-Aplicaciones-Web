/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function calcularBase() {
    var num_entrada = document.getElementById('entrada').value;
    var base_entrada = 10;
    var base_salida = 10;

    function limpiar_campos() {
        document.getElementById("entrada").value = "";
        document.getElementById("entrada").focus();
        document.getElementById("tituloResultado").innerHTML = 'Valor no correcto';
        document.getElementById("ResultadoBase").innerHTML = '¿?';
    }

    // TOFIX → Crear regexp que controlen si es base 10 no puede tener letras, pero si es base superior tendrá las letras correspondientes
    // Filtro númerico y de A hasta F para base 16
    function comprobar_caracteres(x) {
        if ((/[^0-9,A-F,a-f]/g.test(x)) || x == '') {
            alert ("Introduce un valor numérico (0-9) o Hexadecimal (A-F)");
            limpiar_campos();
            return false;
        } else {
            return true;
        }
    }
    comprobar_caracteres(num_entrada);

    // Obtener Valor de Select de base de entrada
    var lista = document.getElementById("selectEntrada");
    var indiceSeleccionado = lista.selectedIndex;
    var opcionSeleccionada = lista.options[indiceSeleccionado];
    base_entrada = opcionSeleccionada.value;

    // Obtener Valor de Select de base de salida
    var lista2 = document.getElementById("selectSalida");
    var indiceSeleccionado2 = lista2.selectedIndex;
    var opcionSeleccionada2 = lista2.options[indiceSeleccionado2];
    base_salida = opcionSeleccionada2.value;

    // Pasa Entrada según selección a base 10
    var entradaBase10 = parseInt(num_entrada, base_entrada);
    // Ahora de base 10 pasamos a la selección 2
    var SALIDA = entradaBase10.toString(base_salida);

    // Si utilizamos base 11 en adelante que convierta letras a mayúsculas
    if ( base_salida > 10 ) {
        SALIDA = SALIDA.toUpperCase();
    }

    //Comprueba que no es valor nulo y pintar resultados
    if ( ! isNaN(entradaBase10)) {
        var resultado = "El resultado en base <strong>" + base_salida + "</strong> es: <br />";
        document.getElementById("tituloResultado").innerHTML = resultado;
        document.getElementById("ResultadoBase").innerHTML = SALIDA;
    } else {
        alert("Has introducido un valor no válido o seleccionada una base incorrecta para el valor introducido. Vuelve a intentarlo.");
        limpiar_campos();
    }
}
