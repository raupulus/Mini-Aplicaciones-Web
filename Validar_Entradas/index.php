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
        <title>Validar Campos de Formulario</title>
        <meta name="description" content="Validar Campos de Formulario" />
        <meta name="keywords" content="validar, formulario, campo, aplicación, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Validar Campos de Formulario</h1>
            <h2 id="subtitulo">Función para validar un input</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                La función comprobar(valor, tipo) recibe dos parámetros para validar si cumple los requisitos un "input"
                <br />
                Para usar esta función solo tienes que importar el archivo "app.js" en la cabecera de html y llamarla desde donde la necesites.
                <br />
                Devolverá un valor booleano indicando si cumple con el patrón "true" o si no cumple con este "false".
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <form id="FormularioTest" name="FormularioTest">
                    <fieldset>
                        <legend>Introduce los datos y pulsa Comprobar</legend>

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
                        <input id="telefono" type="number" name="telefono" />

                        <br /><br />

                        <label for="sitioweb">Página WEB:</label>
                        <input id="sitioweb" type="text" name="sitioweb" />

                        <br /><br />

                        <label for="passwd">Contraseña:</label>
                        <input id="passwd" type="password" name="passwd" />
                    </fieldset>

                    <button type="button" onclick="debugTest()">Comprobar</button>
                </form>

                <!--Aquí se pintan los resultados del debug-->
                <div id="resultados">
                    <h3>Resultados de comprobaciones</h3>
                    <p>
                        Se mostrarán al pulsar el botón de <strong>comprobar</strong>.
                    </p>
                    <p id="testname"></p>
                    <p id="testemail"></p>
                    <p id="testedad"></p>
                    <p id="testtelefono"></p>
                    <p id="testweb"></p>
                    <p id="testpasswd"></p>
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

                    // Contraseña
                    testpasswd.innerHTML = 'Contraseña → ' + comprobar(passwd.value, "password");
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
