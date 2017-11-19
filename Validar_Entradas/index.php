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
        <title>Aplicación</title>
        <meta name="description" content="Aplicación" />
        <meta name="keywords" content="aplicación, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Título de la Aplicación</h1>
            <h2 id="subtitulo">Subtítulo de la aplicación</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Descripción de la aplicación
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <form id="FormularioTest" name="FormularioTest">
                    <p>
                        <fieldset>
                            <legend>Datos Personales</legend>

                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" name="nombre" size="40" maxlength="100" />

                            <br /><br />

                            <label for="email">Email:</label>
                            <input id="email" type="email" name="email" size="40" maxlength="100" />

                            <br /><br />

                            <label for="edad">Edad:</label>
                            <input id="edad" type="number" name="edad" />

                            <br /><br />

                            <label for="telefono">Telefono:</label>
                            <input id="telefono" type="number" name="telefono">

                            <br /><br />

                            <label for="sitioweb">Página WEB:</label>
                            <input id="sitioweb" type="text" name="sitioweb">
                        </fieldset>

                        <input type="button" value="Comprobar" onclick="debugTest()" />
                    </P>
                </FORM>

                <!--Resultados de las comprobaciones al pulsar comprobar-->
                <div id="resultados">
                    <p id="testname"></p>
                    <p id="testemail"></p>
                    <p id="testedad"></p>
                    <p id="testtelefono"></p>
                    <p id="testweb"></p>
                </div>

                <script>
                // Función que se ejecuta al pulsar comprobar (solo para debug)
                function debugTest() {
                    // Nombre
                    testname.innerHTML = 'Nombre → ' + comprobar(nombre.value, "nombre");

                    // Email
                    testemail.innerHTML = 'Email → ' + comprobar(email.value, "email");

                    // Edad
                    testedad.innerHTML = 'Edad → ' + comprobar(edad.value, "edad");

                    // Teléfono
                    testtelefono.innerHTML = 'Teléfono → ' + comprobar(telefono.value, "telefono");

                    // Página Web
                    testweb.innerHTML = 'Página WeB → ' + comprobar(sitioweb.value, "web");
                    }
                </script>
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
