/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

// Variable que almacena la nueva ventana para obtener la firma
var ventanaFirmar;
var colorBrocha = '#ff0700';

function mostrarLienzo() {
    ventanaFirmar = window.open("firmar.html", "Firmar", "width=320px, height=245px");
}

function comenzar() {
    // Lienzo
    lienzo = document.getElementById('lienzo');
    ctx = lienzo.getContext('2d');

    // Escuchar eventos (movimientos y pulsaciones)
    document.addEventListener('mousedown',pulsaRaton,false);
    document.addEventListener('mousemove',mueveRaton,false);
    document.addEventListener('mouseup',levantaRaton,false);
}

function pulsaRaton(capturo) {
    estoyDibujando = true;

    // Indico que vamos a dibujar
    ctx.beginPath();

    // Averiguo las coordenadas X e Y por dónde va pasando el ratón
    ctx.moveTo(capturo.clientX,capturo.clientY);
}

function mueveRaton(capturo) {
    if(estoyDibujando){
        // Color de la brocha
        ctx.strokeStyle = colorBrocha;

        // Por dónde vamos dibujando
        ctx.lineTo(capturo.clientX,capturo.clientY);
        ctx.lineJoin = 'round';
        ctx.lineWidth = 3;  // Ancho de línea
        ctx.stroke();
    }
}

function levantaRaton(capturo) {
    // Indico que termino el dibujo
    ctx.closePath();
    estoyDibujando = false;
}

function cambiarColor(color) {
    colorBrocha = color;
}

// Limpiar canvas
function limpiando() {
    lienzo = document.getElementById('lienzo');
    ctx.clearRect(0, 0, lienzo.width, lienzo.height);
}

function guardarImagen() {
    lienzo = document.getElementById('lienzo');
    data = lienzo.toDataURL('image/png');
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        // Completado y abriendo en nueva pestaña
        if (xhr.readyState == 4) {
            window.open('./firmas/'+xhr.responseText,'_blank');
        }
    };

    xhr.open('POST','guardarImagen.php',true);
    xhr.setRequestHeader('Content-Type', 'application/upload');
    xhr.send(data);

    // Salir de firmar
    limpiando();
    document.remove();
    ventanaFirmar.close();
}
