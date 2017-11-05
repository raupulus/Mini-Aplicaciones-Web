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
        <title>Cambiar imagen según el día de la semana</title>
        <meta name="description" content="Cambiar imagen según el día de la semana"/>
        <meta name="keywords" content="imagen, cambiar imagen, programa, script, php, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Cambiar imagen según el día de la semana</h1>
            <h2 id="subtitulo">Rotación automática cada día</h2>
        </div>

        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Cambiará la imagen automáticamente según el día de la semana
            </p>
        </div>

        <div id="cajacontenido">
            <div id="aplicacion">
                <?php
                //Traduce el nombre inglés de la función date('l')
                $fecha = date('l');

                if ($fecha == 'Monday') {
                    $fecha = 'Lunes';
                } elseif ($fecha == "Tuesday") {
                    $fecha = 'Martes';
                } elseif ($fecha == "Wednesday") {
                    $fecha = 'Miercoles';
                } elseif ($fecha == "Thursday") {
                    $fecha = 'Jueves';
                } elseif ($fecha == "Friday") {
                    $fecha = 'Viernes';
                } elseif ($fecha == "Saturday") {
                    $fecha = 'Sabado';
                } elseif ($fecha == "Sunday") {
                    $fecha = 'Domingo';
                }
                ?>

                <!-- Muestra el día de la semana como título -->
                <div id="diasemana">
                    <?= $fecha; ?>
                </div>

                <!--Convierte el día de la semana a nombre de imagen-->
                <?php $fecha = $fecha.".jpg"; ?>
                <br /><br />
                <?= "<IMG id='muestraimagen' src=./images/$fecha alt=$fecha />"; ?>
            </div>
        </div>


        <div id="cajafooter">
            <footer>
                <p id="autor">
                    Raúl Caro Pastorino
                </p>

                <p id="licencia">
                    Proyecto bajo licencia <a href="https://www.gnu.org/licenses/gpl-3.0-standalone.html" title="Licencia GPLv3" target="_blank">GPLv3</a>
                    <br />
                    Licencia libre con reconocimiento de autoría y proyectos derivados bajo las mismas condiciones
                </p>

                <p id="repositorios">
                    <a href="https://github.com/fryntiz" title="Repositorios Oficiales de Raúl Caro Pastorino" target="_blank">Repositorios en GitHub Oficial del desarrollador</a>
                </p>

                <p id="fecha">
                    <?=date('d-m-Y H:i');?>
                </p>
            </footer>
        </div>
    </body>
</html>
