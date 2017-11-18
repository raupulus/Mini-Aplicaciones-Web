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
        <title>Enviando Sugerencia</title>
        <meta name="description" content="Formulario Sguerencia" />
        <meta name="keywords" content="formulario, mail, email, recomendar, web, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
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
                Se comprueba en esta parte y se procesan los datos recibidos del formulario en el "index.php" para finalmente enviar el correo.
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <?php
                function limpiarCaracteresEspeciales($string ){
                    $string = htmlentities($string);
                    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
                    return $string;
                }

                //Variables pasadas mediante POST y filtrada etiquetas HTML
                $nombre = limpiarCaracteresEspeciales($_POST['nombre']);
                $email = limpiarCaracteresEspeciales($_POST['email']);
                $edad = limpiarCaracteresEspeciales($_POST['edad']);
                $sugerencia = limpiarCaracteresEspeciales($_POST['sugerencia']);

                //Variables con el Contenido del mensaje
                $asunto = "Sugerencia";
                $mensaje = "El usuario <strong>$nombre</strong>, con email <strong>$email</strong> ha enviado el siguiente mensaje:<br /> $sugerencia";

                //Función debug para comprobar que llegan bien todas las variables
                function debugMAIL($email,$asunto,$mensaje) {
                    echo "Asunto: $asunto";
                    echo "<br />";
                    echo "Email: $email";
                    echo "<br />";
                    echo "Mensaje:<br /> $mensaje";
                }

                debugMAIL($email,$asunto,$mensaje);

                function enviarMAIL($email,$asunto,$mensaje) {
                    mail($asunto,$mensaje, "FROM: ".$email);
                }

                enviarMAIL($email,$asunto,$mensaje);
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
