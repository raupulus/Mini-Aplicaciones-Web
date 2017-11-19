<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>

<?php require 'funciones.php'; ?>
<?php iniciar_contador(); ?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Mostrar tiempo de carga</title>
        <meta name="description" content="Mostrar tiempo de carga de la página" />
        <meta name="keywords" content="tiempo, carga, cargar, pagina, velocidad, aplicación, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

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
