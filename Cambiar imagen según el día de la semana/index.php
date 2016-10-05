<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Cambiar imagen según el día de la semana</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Cambiar imagen según el día de la semana"/>
	<META name="keywords" content="imagen, cambiar imagen, programa, script, php, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Cambiar imagen según el día de la semana</H1>
	<H2 id="titulo2">Rotación automática cada día</H2>
	<P></P>
	<DIV class="ejemplo">
		<?php
		$fecha = date("l");
		
		echo "<B style='color:red; font-size:1.8em;'>";
		echo $fecha;
		echo "/";
		
		if($fecha = Monday){
			$fecha = Lunes;
		} elseif ($fecha = Tuesday){
			$fecha = Martes;
		} elseif ($fecha = Wednesday){
			$fecha = Miercoles;
		} elseif ($fecha = Thursday){
			$fecha = Jueves;
		} elseif ($fecha = Friday){
			$fecha = Viernes;
		} elseif ($fecha = Saturday){
			$fecha = Sabado;
		} elseif ($fecha = Sunday){
			$fecha = Domingo;
		}
		
		echo $fecha;
		echo "</B>";
		$fecha = $fecha.".jpg";
		echo "<BR/><BR/>";
		echo "<IMG src=./images/$fecha alt=$fecha />";
		?>
	</DIV>
</BODY>
</HTML>
