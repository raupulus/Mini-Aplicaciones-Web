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
	<H1 id="titulo1">Foro</H1>
	<H2 id="titulo2">Esto es un ejemplo de foro</H2>
	<P>Ejemplo de foro donde se puede exponer dudas o cualquier tipo de comentario y además sea posible responder.</P>
	<?php
	//Variables que definen BD y usuario que conecta
	$HOST = "127.0.0.1";
	$USER = "www-data";
	$PASSWORD = "contraseña1";
	$DB = "foro";
	$CONNECT = mysql_connect($HOST,$USER,$PASSWORD);
	mysql_select_db($DB,$CONNECT);
	mysql_set_charset('utf8');//Establece modo de conexión con la BD
	$CONSULTA = mysql_query("SELECT * from foro1 WHERE identificador=0 ORDER BY fecha DESC",$CONNECT);
	
	$lado = mysql_num_rows($CONSULTA);
	?>
	<DIV class="ejemplo">
		<H3><U>Foro General</U></H3>
		<TABLE width="100%">
			<TR>
				<TD width="5%"></TD>
				<TD width="35%">TITULO</TD>
				<TD width="30%">FECHA</TD>
				<TD width="30%">RESPUESTAS</TD>
			</TR>
		</TABLE>
		<?php
		echo "<HR size=6 color=FFFFFF width=100% align=left>";
		while ($ROW = mysql_fetch_array($CONSULTA)){
			//Variables para extraer de la tabla los valores
			$id = $ROW['id'];
			$titulo = $ROW['titulo'];
			$fecha = $ROW['fecha'];
			$respuestas = $ROW['respuestas'];
			
			//Pintar tabla
			echo ("<TABLE width='100%' border='0' cellspacing='0' cellpadding='0'>");
			echo ("<TR>");
			echo ("<TD width='5%'><A href=foroforo.php?id=$id>Ver</A></TD>");
			echo ("<TD width='30%'>$titulo</TD>");
			echo ("<TD width='30%'>".date("d-m-y",$fecha)."</TD>");
			echo ("<TD width='30%'>$respuestas</TD");
			echo "</TR>";
			echo "</TABLE>";
			echo "<HR size=6 color=FFFFFF width=100% align=left>";
		}
		?>
		
		<BR/>
		<P align="center">
			<?php
			echo "<A href=formularioforo.php?respuestas=0&id=$id>Añadir Mensaje</A>";
			?>
		</P>
	</DIV>

</BODY>
</HTML>
