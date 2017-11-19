<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Reloj Digital</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Mostrar tiempo de carga de la página"/>
    <META name="keywords" content="reloj, digital, hora, tiempo, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

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
