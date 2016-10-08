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
		$consulta = mysql_query("SELECT * FROM foro1 WHERE id='$id' ORDER BY fecha DESC",$ENLACE);
		while($ROW = mysql_fetch_array($consulta)){
			$titulo=$ROW["titulo"];
			$autor=$ROW["autor"];
			$mensaje=$ROW["mensaje"];
			$id=$ROW["id"];
			$fecha=$ROW["fecha"];
			$respuestas=$ROW["respuestas"];
			echo "<TABLE>";
			echo "<TR><TD>TITULO: $titulo</TD></TR>";
			echo "<TR><TD>AUTOR: $autor</TD></TR>";
			echo "<TR><TD>$mensaje</TD></TR>";
			echo "</TABLE>";
			
			echo "<A href=formularioforo.php?id=$id&respuestas=$respuestas>";
			echo "<BR/><BR/>";
			echo "Añadir mensaje";
			echo "<A href=index.php>Volver al foro</A>";
		}
		
		$consulta2 = mysql_query("SELECT * FROM foro1 WHERE identificador='$id' ORDER BY fecha DESC",$ENLACE);
		echo "RESPUESTAS:<BR/><HR/>";
		while($row=mysql_fetch_array($consulta2)){
			$titulo=$row['titulo'];
			$autor=$row['autor'];
			$mensaje=$row['mensaje'];
			$id=$row['id'];
			$fecha=$row['fecha'];
			$respuestas=$row['respuestas'];
			echo "<TABLE>";
			echo "<TR><TD>TITULO: $titulo</TD></TR>";
			echo "<TR><TD>AUTOR: $autor</TD></TR>";
			echo "<TR><TD>MENSAJE: $mensaje</TD></TR>";
			echo "</TABLE>";
		}
		?>
	</DIV>
</BODY>
</HTML>
