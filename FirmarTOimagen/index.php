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
        <title>Firmar</title>
        <meta name="description" content="Firmar"/>
        <meta name="keywords" content="firmar, firmas, aplicación, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Firma a Imagen</h1>
            <h2 id="subtitulo">Mini aplicación para firmar</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Esta aplicación consta de una capa "<strong>CANVAS</strong>" donde se recogerá una firma y esta será exportada a una imagen
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <DIV class="cajaPrincipal">
                    <P>
                        Pulsa en el siguiente título para que se abra el cuadro de firmas:
                    </P>
                    <BR/>
                    <P>
                        <H3 id="iniciarFirma" onClick="mostrarLienzo(true)">PULSA AQUÍ PARA FIRMAR</H3>
                    </P>
                    <FORM id="formFirma">
                        <CANVAS id="lienzo"></CANVAS>
                        <BR/>
                        <INPUT type="button" name="limpiar" value="Limpiar" onClick="limpiando()"/>
                        <INPUT type="button" name="guardar" value="Guardar" onClick="guardarImagen()"/>
                    </FORM>
                </DIV>
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
