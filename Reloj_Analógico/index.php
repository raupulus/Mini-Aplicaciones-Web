<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Reloj Analógico</title>
        <meta name="description" content="Mostrar tiempo de carga de la página" />
        <meta name="keywords" content="reloj, analógico, hora, tiempo, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body onload="funcionReloj()">
        <div id="cajatitulo">
            <h1 id="titulo">Reloj Analógico</h1>
            <h2 id="subtitulo">Aplicación de un reloj Analógico</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                La hora que establece este reloj será tomada desde el ordenador del cliente (No desde el servidor)
                <br />
                Puedes copiar la caja con el id "CajaReloj" en la parte del sitio web que deseas tener este reloj.
            </p>
        </div>

<!--Caja que contiene el reloj-->
    <DIV id="CajaReloj">
        <IMG id="segundos" src="./images/Aguja3.png" alt="Manilla segundos reloj"/>
        <IMG id="minutos" src="./images/Aguja2.png" alt="Manilla pequeña reloj"/>
        <IMG id="hora" src="./images/Aguja1.png" alt="Manilla grande reloj"/>
    </DIV>
<!--Fin del reloj-->
</BODY>
</HTML>
