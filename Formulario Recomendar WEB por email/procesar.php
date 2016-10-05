<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Formulario recomendar WEB</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Formulario recomendar WEB"/>
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
		
		//enviarMAIL($emailamigo,$asunto,$mensaje,$tuemail);
		?>
	</DIV>
</BODY>
</HTML>
