/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

 //Función reloj
 function cambiarHora() {
     momentoActual = new Date();//Crea hora
     reloj = document.getElementById('hora');//id donde pintar
     hora = momentoActual.getHours();//Extraemos Hora
     minutos = momentoActual.getMinutes();//Extraemos Minutos
     segundos = momentoActual.getSeconds();//Extraemos Segundos

 //Comprobamos si es menor de 10 que añada 0 por estética
     if (hora < '10') {
         hora = "0" + hora;
     }
     if (minutos < '10') {
         minutos = "0" + minutos;
     }
     if (segundos < '10') {
         segundos = "0" + segundos;
     }

 //Pintamos el resultado dentro del reloj
     reloj.innerHTML = hora + " : " + minutos + " : " + segundos;

     //Actualizar reloj cada segundo
     setTimeout("cambiarHora()",1000);
 }
