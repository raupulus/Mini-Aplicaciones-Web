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
	<?php
	$asunto = "Te recomiendo visitar este portal.";
	$mensaje = "Hola $nombreamigo, soy $tunombre y te recomiendo visitar www.fryntiz.es, un portal en el que podrás conocer más sobre el programador que ha realizado esto. Espero que lo visites pronto y estoy convencido que te va a gustar. Por cierto, si es de tu agrado, comparte ese sitio web con más personas que le pueda interesar.";
	
	function debugMAIL() {
		echo "Asunto: $asunto";
		echo "<BR/>";
		echo "Mensaje: $mensaje";
		echo "<BR/>";
		echo "Email de amigo: $emailamigo";
		echo "Tu email: $tuemail";
	}
	
	debugMAIL();
	?>
</BODY>
</HTML>
