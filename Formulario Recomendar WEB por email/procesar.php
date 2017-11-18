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
                <?php
                //Variables pasadas mediante POST
                $tunombre = $_POST['tunombre'];
                $tuemail = $_POST['tuemail'];
                $nombreamigo = $_POST['nombreamigo'];
                $emailamigo = $_POST['emailamigo'];

                //Variables con el Contenido del mensaje
                $asunto = "Te recomiendo visitar este portal.";
                $mensaje = "Hola <B>$nombreamigo</B>, soy <B>$tunombre</B> y te recomiendo visitar <B style='color:red;font-size:1.2;'>www.fryntiz.es</B>, un portal en el que podrás conocer más sobre el programador que ha realizado esto. Espero que lo visites pronto y estoy convencido que te va a gustar. Por cierto, si es de tu agrado, comparte ese sitio web con más personas que le pueda interesar.";

                //Función debug para comprobar que llegan bien todas las variables
                function debugMAIL($emailamigo,$asunto,$mensaje,$tuemail) {
                    echo "Asunto: $asunto";
                    echo "<BR/>";
                    echo "Mensaje: $mensaje";
                    echo "<BR/>";
                    echo "Email de amigo: $emailamigo";
                    echo "<BR/>";
                    echo "Tu email: $tuemail";
                }

                debugMAIL($emailamigo,$asunto,$mensaje,$tuemail);

                function enviarMAIL($emailamigo,$asunto,$mensaje,$tuemail) {
                    mail($emailamigo,$asunto,$mensaje, "FROM: ".$tuemail);
                }

                enviarMAIL($emailamigo,$asunto,$mensaje,$tuemail);
                ?>
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
