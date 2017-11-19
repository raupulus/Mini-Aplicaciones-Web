<!DOCTYPE html>
<?php

?>
<HTML lang="es">
<HEAD>
    <TITLE>Mostrar tiempo de carga</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Mostrar tiempo de carga de la página"/>
    <META name="keywords" content="ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
    <H1 id="titulo1">TIEMPO DE CARGA</H1>
    <H2 id="titulo2">Programa para mostrar el tiempo de carga de una WEB</H2>
    <P>Con este código puedes mostrar el tiempo de carga de una página web controlando así la frustración de nuestros visitantes con internet a velocidad baja.</P>
    <DIV class="ejemplo">
        <?php
        echo "<IMG src=./images/velocidad.jpg alt='Imagen de carga'/>";

        $tiempo = microtime();
        $tiempo = explode(" ",$tiempo);
        $tiempo = $tiempo[1] + $tiempo[0];
        $tiempofinal = $tiempo;
        $tiempototal = number_format($tiempofinal - $tiempoinicial,20);

        echo "<BR/><BR/>";
        echo "La página tardó en crearse: <B style='font-size:1.4em; color:red;'>$tiempototal</B> segundos.";
        ?>
    </DIV>
</BODY>
</HTML>
