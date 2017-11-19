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

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Tiempo de carga</h1>
            <h2 id="subtitulo">Programa para mostrar el tiempo de carga de una WEB</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Con este código puedes mostrar el tiempo de carga de una página web controlando así la frustración de nuestros visitantes con internet a velocidad baja.
                <br />
                Donde se quiere iniciar la marca para contar el tiempo se ejecuta la función php → iniciar_contador();
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
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
            </div>
        </div>
</BODY>
</HTML>
