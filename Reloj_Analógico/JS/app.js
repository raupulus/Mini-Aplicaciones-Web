/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

function funcionReloj() {
    var momentoActual = new Date();//Crea hora
    var horaActual = momentoActual.getHours();//Extraemos Hora
    var minutoActual = momentoActual.getMinutes();//Extraemos Minutos
    var segundoActual = momentoActual.getSeconds();//Extraemos Segundos

    //Identificadores para elementos
    var hora = document.getElementById('hora');
    var minutos = document.getElementById('minutos');
    var segundos = document.getElementById('segundos');

    function cambiarHora() {
        //Calcular grados por hora (30deg cada hora, 30*12=360º)
         var horaActualGrados = horaActual * 30 + "deg";
         hora.style.transform = "rotate(" + horaActualGrados + ")";

        //Calcular grados cada minuto (6deg cada minuto, 6*6=360º)
         var minutoActualGrados = minutoActual * 6 + "deg";
         minutos.style.transform = "rotate(" + minutoActualGrados + ")";
    }

    function cambiarSegundos() {
        //Calcular grados cada segundo (6deg cada segundo, 6*6=360º)
        var segundoActualGrados = segundoActual * 6 + "deg";
        segundos.style.transform = "rotate(" + segundoActualGrados + ")";
    }

    cambiarHora();
    cambiarSegundos();

    //Actualizar reloj
    setTimeout("funcionReloj()",1000);

    //Actualizar reloj cada segundo
    //    setTimeout("cambiarSegundos()",1000);
}
