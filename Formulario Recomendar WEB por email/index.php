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
        <title>Formulario recomendar WEB</title>
        <meta name="description" content="Formulario recomendar WEB" />
        <meta name="keywords" content="aformulario, mail, email, recomendar, web, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Formulario recomendar WEB</h1>
            <h2 id="subtitulo">Recomienda la página web a un amigo</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Este formulario procesará los datos introducidos y enviará una recomendación del sitio a un amigo
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <form id="FormSugerencia" name="FormSugerencia" method="POST" action="procesar.php" onSubmit="return validarFormulario()">
                    <fieldset>
                        <legend>Datos necesarios para recomendar</legend>

                        <label for="tunombre">Tu nombre:</label>
                        <input id="tunombre" type="text" name="tunombre" size="20" />
                        <br />

                        <label for="tuemail">Tu email:</label>
                        <input id="tuemail" type="email" name="tuemail" size="20" />
                        <br />

                        <label for="nombreamigo">Nombre de tu amigo:</label>
                        <input id="nombreamigo" type="text" name="nombreamigo" size="20" />
                        <br />

                        <label for="emailamigo">Email de tu amigo</label>
                        <input id="emailamigo" type="email" name="emailamigo" size="20" />
                        <br /><br />

                        <input type="submit" value="Recomendar" />
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
