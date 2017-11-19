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
        <title>Reloj Digital</title>
        <meta name="description" content="Reloj Digital" />
        <meta name="keywords" content="reloj, digital, hora, tiempo, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY onload="cambiarHora()"><!--Funcion JS al cargar página-->
    <H1>Reloj Digital</H1>
    <H2>Aplicación que contiene un reloj Digital</H2>
    <P>La hora que establece este reloj será tomada desde el ordenador del cliente (No desde el servidor)</P>

<!--Caja que contiene el reloj-->
    <DIV id="CajaReloj">
        <P id="hora">
            HH:MM:SS
        </P>
    </DIV>
<!--Fin del reloj-->
</BODY>
</HTML>
