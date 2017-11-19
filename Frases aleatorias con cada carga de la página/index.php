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
        <title>Frases Aleatorias</title>
        <meta name="description" content="Frases Aleatorias al cargar página" />
        <meta name="keywords" content="frases aleatorias, cargar página, php, código, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Frases aleatorias</h1>
            <h2 id="subtitulo">Una frase distinta cada vez que entras</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Esta aplicación genera una frase aleatoria cada vez que se carga esta página permitiendo dar por ejemplo varias bienvenidas, también se puede aplicar para otros motivos.
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <div>
                    <?php
                    $frases = array(
                        1=>"Hola navegante.",
                        2=>"Bienvenido a mi web.",
                        3=>"Gracias por visitarnos.",
                        4=>"Te recomiendo visitar nuestro foro.",
                        5=>"Puedes enviarnos las sugerencias que quieras.",
                        6=>"No dejes de visitarnos estos días, tendremos nuevas sorpresas.",
                    );

                    //Crea un número aleatorio entre 1 y longitud del array
                    $aleatorio = rand(1, count($frases));
                    ?>

                    <div id="fraseactual">
                        La frase aleatoria del momento es:
                        <br />
                        <strong>
                            <?= $frases[$aleatorio]; ?>
                        </strong>
                    </div>
                </div>

                <!--Mostrar todas las frases disponibles (DEBUG)-->
                <div id="frasesDisponibles">
                    <h3>Listado de frases disponibles:</h3>

                    <ol>
                    <?php foreach ($frases as $frase): ?>
                        <li>
                            <?= $frase; ?>
                        </li>
                    <?php endForeach; ?>
                    </ol>
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
