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
		//Variables pasadas mediante POST
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$edad = $_POST['edad'];
		$sugerencia = $_POST['sugerencia'];
		
		//Variables con el Contenido del mensaje
		$asunto = "Sugerencia";
		$mensaje = "El usuario <B>$nombre</B>, con email <B>$email</B> ha enviado el siguiente mensaje:\n\n $sugerencia";

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
		
		?>
	</DIV>
</BODY>
</HTML>
