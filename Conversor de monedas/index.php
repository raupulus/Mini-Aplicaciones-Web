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
        <title>Conversor de monedas</title>
        <meta name="description" content="Conversor de monedas"/>
        <meta name="keywords" content="conversor, moneda, monedas, aplicación, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>


    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Conversor de Euros - Pesetas</h1>
            <h2 id="subtitulo">Subtítulo de la aplicación</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Introduce la moneda desde la que quieres convertir y después pulsa la flecha en el sentido de la conversión que deseas.
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <div id="cajacalculadora">
                    <div id="euros">
                        Euros
                        <br />
                        <input id="inputeuros" type="text" />
                    </div>

                    <div id="flechas">
                            <img alt="flecha derecha" src="./images/flechadrch.png" onclick="calcularpesetas()" />
                        <br />
                            <img alt="flecha izquierda" src="./images/flechaizq.png" OnClick="calculareuros()" />
                    </div>

                    <div id="pesetas">
                        Pesetas
                        <br //>
                        <input id="inputpesetas" type="text" />
                    </div>


                </div>

                <div id="resultado">
                    Resultado de la conversión:
                    <br />
                    <input id="inputresultado" type="text" size="40" readonly />
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
