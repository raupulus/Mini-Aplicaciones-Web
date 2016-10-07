<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Foro</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Foro"/>
	<META name="keywords" content="foro, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Vista previa</H1>
	<H2 id="titulo2">Revisa el mensaje antes de publicarlo</H2>
	<P>Desde aquí puedes comprobar si es correcto lo que quieres enviar</P>
	<DIV class="ejemplo">
		<?php
		//Variables para conectar a la BD
		$HOST = "127.0.0.1";
		$USER = "www-data";
		$PASSWORD = "contraseña1";
		$DB = "foro";
		$ENLACE = "mysql_connect($HOST,$USER,$PASSWORD)";
		
		mysql_select_db($DB,$CONNECT);
		mysql_set_charset('utf8');//Establece modo de conexión con la BD
		?>
	</DIV>
</BODY>
</HTML>
