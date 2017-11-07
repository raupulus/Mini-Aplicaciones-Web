<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
//Librerías PHP
include 'funciones.php';
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

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Fecha y Hora</h1>
            <h2 id="subtitulo">Apliación que muestra la hora y Fecha</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                En esta aplicación se muestra la fecha y hora, cosa que puede ser necesaria incluir en nuestro sitio web.
                <br  /><br  />
                Se incluirá la fecha y hora formateada en cualquier parte del documento que llamemos a la función "mostrar_fh();"
                <br  /><br  />
                Se puede incluir la versión abreviada con "mostrar_fh_reducido();" tal como puede verse en el ejemplo del cuadrado flotante abajo a la derecha.
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">

                <!--Caja donde se muestra datos en formato largo-->
                <div id="cajafechayhora">
                <?= mostrar_fh(); ?>
                </div>

                <!--Recuadro fijo abajo y a la izquierda-->
                <div id="cajahoraflotante">
                <?= mostrar_fh_reducido() ?>
                </div>
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
