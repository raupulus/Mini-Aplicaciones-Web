<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Fecha y Hora</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Plantilla de Ejemplo con fecha y Hora"/>
    <META name="keywords" content="Fecha, Hora, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

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
