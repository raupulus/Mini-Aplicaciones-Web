<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Proteger página por contraseña</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Proteger página por contraseña"/>
	<META name="keywords" content="proteger, contraseña, pagina, proteger pagina, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<DIV class="ejemplo">
		<?php
		$usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		
		if($usuario=="usuario" && $pass=="clave") {
			$valido = "si";
		} else {
			$valido = "no";
		}
		if ($valido == "si") {
			echo "Bienvenido, has introducido correctamente el usuario y la contraseña.";
		} else {
			echo "Vuelve a intentarlo: El usuario o la contraseña son incorrectos.";
		}
		?>
	</DIV>
</BODY>
</HTML>
