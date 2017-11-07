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
        <title>Fecha y Hora</title>
        <meta name="description" content="Plantilla de Ejemplo con fecha y Hora"/>
        <meta name="keywords" content="Fecha, Hora, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>


<BODY>
    <H1 id="titulo1">FECHA Y HORA</H1>
    <H2 id="titulo2">Apliación que muestra la hora y Fecha</H2>
    <P>En esta aplicación se muestra la fecha y hora, cosa que puede ser necesaria incluir en nuestro sitio web</P>
    <DIV class="ejemplo"><!--Recuadro central verde-->
        <?php
        echo "Hoy es"." ",date("d/m/Y"),"y la hora actual es"." ",date("h:i:s"),".<BR/><BR/>Queremos daros la bienvenida a nuestra WEB.";
        echo "<BR/><BR/>";
        echo "Otro Ejemplo más corto:<BR/>";
        echo date("d/m/Y")," - ".date("h:i");
        ?>
    </DIV>

    <DIV class="recuadro"><!--Recuadro fijo abajo y a la izquierda-->
        <?php
        echo date("h:i");
        echo "<BR/>";
        echo date("d/m");
        echo "<BR/>";
        echo date("Y");
        ?>
    </DIV>
</BODY>
</HTML>
