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
        <title>Contador de visitas</title>
        <meta name="description" content="Contador de visitas"/>
        <meta name="keywords" content="Contador de visitas, contador, visitas, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Contador de visitas</h1>
            <h2 id="subtitulo">Sencillo contador de visitas</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Este sencillo contador de visitas se puede utilizar para cada página independiente. Se media a través del archivo "visitas.txt"
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <!-- Mostrar información -->
                <div id="mostrarcontador">
                    <?php
                        // Importo archivo con las funciones de contadores
                        include 'funciones.php';

                        // Aumentar Contador
                        contador($archivos[1]);

                        // Generar estadísticas
                        visitas();
                    ?>
                </div>

                <div id="navegarsitio">
                    <a href="index.php" title="Principal">
                        Volver a la Web principal
                    </a>
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
