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
        <title>Proteger página por contraseña</title>
        <meta name="description" content="Proteger página por contraseña" />
        <meta name="keywords" content="proteger, contraseña, pagina, proteger pagina, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Proteger página por contraseña</h1>
            <h2 id="subtitulo">Acceder a un sitio web utilizando contraseña</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Esta aplicación trata de poner una contraseña que te obliga a identificarte para restringir el acceso hacia un sitio web sin utilizar base de datos, seguridad relativa pero puede ser de ayuda para tener algo rápido y simple.
            </p>
        </div>

        <div id="cajacontenido">
            <div id="aplicacion">
                <form id="formaccess" method="POST" action="comprobar.php">
                    <fieldset>
                        <legend>Datos de Acceso</legend>

                        <label id="usuario">Usuario:</label>
                        <input id="usuario" type="text" name="usuario" size="22" />

                        <label for="password">Contraseña</label>
                        <input id="password" type="password" name="pass" size="22" />

                        <br /><br />

                        <button type="submit">Entrar</button>
                    </fieldset>
                </form>
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
