<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Enviando Sugerencia</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Formulario Sguerencia"/>
    <META name="keywords" content="formulario, mail, email, recomendar, web, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

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
