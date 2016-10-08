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
	<H1 id="titulo1">Nuevo Mensaje</H1>
	<H2 id="titulo2">Añadir una nueva respuesta</H2>
	<P>Rellena el siguiente formulario para añadir un mensaje</P>
	<DIV class="ejemplo">
		<P align="center">
			<U>
				Formulario para insertar un mensaje en el foro
			</U>
		</P>
		<?php
		$respuestas = $_GET['respuestas'];
		$id = $_GET['id'];
		?>
		<FORM method="POST" action="addforo.php">
			<INPUT type="hidden" name="respuestas" value="<?php echo $respuestas;?>"/>
			<INPUT type="hidden" name="identificador" value="<?php echo $id;?>"/>
			AUTOR:<INPUT type="text" name="autor" size="25"/>
			<BR/><BR/>
			TITULO:<INPUT type="text" name="titulo" size="25"/>
			<BR/><BR/>
			MENSAJE:<TEXTAREA name="mensaje"></TEXTAREA>
			<BR/><BR/>
			<INPUT type="submit" value="Enviar"/>			
		</FORM>
	</DIV>
</BODY>
</HTML>
