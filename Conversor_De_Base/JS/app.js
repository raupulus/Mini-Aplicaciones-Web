/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function calcularBase() {
    var num_entrada = document.getElementById('entrada').value;
    var base_entrada = '';
    var base_salida = '';

    function extraer_bases() {
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
    }

    function limpiar_campos() {
        document.getElementById("entrada").value = "";
        document.getElementById("entrada").focus();
        document.getElementById("tituloResultado").innerHTML = 'Valor no correcto';
        document.getElementById("ResultadoBase").innerHTML = '¿?';
    }

    // Filtro númerico que comprueba según la base de entrada
    function comprobar_caracteres(x) {
        switch (true) {
            case x == '':
                return false;
            case (base_entrada <= 10):
                return /^[0-9]+$/g.test(x);
            case (base_entrada == 11):
                return /^[0-9Aa]+$/g.test(x);
            case (base_entrada == 12):
                return /^[0-9A-Ba-b]+$/g.test(x);
            case (base_entrada == 13):
                return /^[0-9A-Ca-c]+$/g.test(x);
            case (base_entrada == 14):
                return /^[0-9A-Da-d]+$/g.test(x);
            case (base_entrada == 15):
                return /^[0-9A-Ea-e]+$/g.test(x);
            case (base_entrada == 16):
                return /^[0-9A-Fa-f]+$/g.test(x);
            default:
                return false;
        }
    }

    // Extraer bases seleccionadas
    extraer_bases();

    // LLama a la comprobación de carácteres
    if (! comprobar_caracteres(num_entrada)) {
        limpiar_campos();
        alert('Valor inválido o en base incorrecta');
        return false;
    }

    // La entrada se convierte siempre a base10
    var entradaBase10 = parseInt(num_entrada, base_entrada);

    // Pasamos de base10 a la base de destino elegida
    var SALIDA = entradaBase10.toString(base_salida);

    // Si utilizamos base 11 en adelante que convierta letras a mayúsculas
    if ( base_salida > 10 ) {
        SALIDA = SALIDA.toUpperCase();
    }

    // Mostrar salida pintándola en su campo
    function pintar_resultado() {
        var resultado = "El resultado en base <strong>" + base_salida + "</strong> es: <br />";
        document.getElementById("tituloResultado").innerHTML = resultado;
        document.getElementById("ResultadoBase").innerHTML = SALIDA;
    }
    pintar_resultado();
}
