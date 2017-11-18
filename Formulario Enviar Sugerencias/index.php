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
        <title>Formulario de sugerencias</title>
        <meta name="description" content="Formulario Sguerencia" />
        <meta name="keywords" content="formulario, aplicación, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Formulario de Sugerencias</h1>
            <h2 id="subtitulo">Envía una sugerencia de forma interna</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Esta aplicación toma datos del usuario y envía un mensaje con la información introducida.
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <form id="FormSugerencia" name="FormSugerencia" method="POST" action="procesar.php" onSubmit="return validarFormulario()">
                    <p>
                        <fieldset>
                            <legend>Datos Personales</legend>

                            <label for="nombre">*Tu nombre:</label>
                            <input id="nombre" type="text" name="nombre" size="40" maxlength="100" requiered />

                            <br /><br />

                            <label for="email">*Tu email:</label>
                            <input id="email" type="email" name="email" size="40" maxlength="100" requiered />

                            <br /><br />

                            <label for="edad">¿Eres mayor o menor de edad?</label>
                            <select id="edad" name="edad">
                                <option name="edad" value="no" selected>
                                    Seleccionar Edad
                                </option>

                                <option name="edad" value="-18">
                                    Tengo menos de 18 años
                                </option>

                                <option name="edad" value="+18">
                                    Tengo más de 18 años
                                </option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <legend>Sugerencia</legend>

                            <label for="sugerencia">Añade una sugerencia</label>
                            <br />
                            <textarea id="sugerencia" name="sugerencia" requiered cols="40" rows="8" form="FormSugerencia" maxlength="300"></textarea>

                            <P>Máximo 300 carácteres</P>
                        </fieldset>

                        <input type="submit" value="Enviar Sugerencia" name="SugerenciaEnviada" />
                    </P>
                </FORM>
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
