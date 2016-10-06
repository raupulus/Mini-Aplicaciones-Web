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
	<H1 id="titulo1">Proteger página por contraseña</H1>
	<H2 id="titulo2">Acceder a un sitio web utilizando contraseña</H2>
	<P>Esta aplicación trata de poner una contraseña que te obliga a identificarte para restringir el acceso hacia un sitio web</P>
	<DIV class="ejemplo">
		<FORM method="POST" action="comprobar.php">
			<TABLE>
				<TR>
					<TD>Usuario:</TD>
					<TD><INPUT type="text" name="usuario" size="20"/></TD>
				</TR>
				
				<TR>
					<TD>Contraseña:</TD>
					<TD><INPUT type="password" name="pass" size="20"/></TD>
				</TR>
				
				<TR>
					<TD></TD>
					<TD><INPUT type="submit" value="Entrar" name="privado"/></TD>
				</TR>
			</TABLE>
		</FORM>
		<?php
		
		?>
	</DIV>
</BODY>
</HTML>
