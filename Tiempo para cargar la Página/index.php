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
                <br />
                En el punto de ruptura, donde dejar de medir el tiempo ejecutaremos la función php → mostrar_tiempo();
                <br />
                Para ver el tiempo total usamos la función con return string para ello → mostrar_tiempo();
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <div id="contadordecarga">
                    <img src="./images/velocidad.jpg" alt='Imagen de carga' title='Imagen de carga' />

                    <div id="mostrartiempo">
                        <?php finalizar_contador() ?>
                        La página tardó en crearse:
                        <br />
                        <strong>
                            <?= mostrar_tiempo() ?>
                        </strong> segundos.
                    </div>
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
