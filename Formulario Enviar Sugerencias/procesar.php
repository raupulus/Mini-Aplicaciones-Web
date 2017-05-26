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
		
		?>
	</DIV>
</BODY>
</HTML>
