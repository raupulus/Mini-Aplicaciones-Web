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

<BODY>
    <DIV class="ejemplo">
        <?php
        function limpiarCaracteresEspeciales($string ){
            $string = htmlentities($string);
            $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
            //htmlspecialchars($nombre); //Convierte caracteres especiales
            return $string;
        }

        //Variables pasadas mediante POST y filtrada etiquetas HTML
        $nombre = limpiarCaracteresEspeciales($_POST['nombre']);
        $email = limpiarCaracteresEspeciales($_POST['email']);
        $edad = limpiarCaracteresEspeciales($_POST['edad']);
        $sugerencia = limpiarCaracteresEspeciales($_POST['sugerencia']);

        //Variables con el Contenido del mensaje
        $asunto = "Sugerencia";
        $mensaje = "El usuario <B>$nombre</B>, con email <B>$email</B> ha enviado el siguiente mensaje:\n\n $sugerencia";

        //Función debug para comprobar que llegan bien todas las variables
        function debugMAIL($email,$asunto,$mensaje) {
            echo "Asunto: $asunto";
            echo "<BR/>";
            echo "Email: $email";
            echo "<BR/>";
            echo "Mensaje:\n $mensaje";
        }

        debugMAIL($email,$asunto,$mensaje);

        function enviarMAIL($email,$asunto,$mensaje) {
            mail($asunto,$mensaje, "FROM: ".$email);
        }

        enviarMAIL($email,$asunto,$mensaje);
        ?>
    </DIV>
</BODY>
</HTML>
