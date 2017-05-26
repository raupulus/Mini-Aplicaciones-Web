<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Nombre</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Plantilla de Ejemplo"/>
	<META name="keywords" content="ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Título de la página</H1>
	<H2 id="titulo2">Sección de que se trata</H2>
	<P>Descripción</P>
	<DIV class="ejemplo">
		<FORM method="POST" action="procesar.php">
			<P>
				<FIELDSET>
					<LEGEND>Datos Personales</LEGEND>
					
					<LABEL for="nombre">*Tu nombre:</LABEL>
					<INPUT type="text" name="nombre" size=40 requiered/>
					<BR/>

					<LABEL for="email">*Tu email:</LABEL>
					<INPUT type="text" name="email" size="40" requiered/>
					<BR/>

					<LABEL for="edad">¿Eres mayor o menor de edad?</LABEL>
					<SELECT>
						<OPTION value="-18">Tengo menos de 18 años</OPTION>
						<OPTION value="+18" default>Tengo más de 18 años</OPTION>
					</SELECT>
				</FIELDSET>
				
				<FIELDSET>
					<LEGEND>Sugerencia</LEGEND>
				</FIELDSET>
				
				<INPUT type="submit" value="Enviar Sugerencia" name="SugerenciaEnviada"/>
			</P>
		</FORM>
	</DIV>
<?php

?>
</BODY>
</HTML>
