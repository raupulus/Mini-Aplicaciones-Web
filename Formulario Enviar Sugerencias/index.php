<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Sugerencias</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Plantilla de Ejemplo"/>
	<META name="keywords" content="ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Enviar Sugerencia</H1>
	<H2 id="titulo2">Formulario que permite enviar sugerencia desde un sitio web</H2>
	<P>Rellena los siguientes campos para poder enviar una sugerencia a los administradores del sitio web</P>
	<DIV class="ejemplo">
		<FORM id="FormSugerencia" method="POST" action="procesar.php">
			<P>
				<FIELDSET>
					<LEGEND>Datos Personales</LEGEND>
					
					<BR/>
					
					<LABEL for="nombre">*Tu nombre:</LABEL>
					<INPUT type="text" name="nombre" size=40 requiered/>
					<BR/><BR/>

					<LABEL for="email">*Tu email:</LABEL>
					<INPUT type="email" name="email" size="40" requiered/>
					<BR/><BR/>

					<LABEL for="edad">¿Eres mayor o menor de edad?</LABEL>
					<SELECT>
						<OPTION name="edad" value="-18">Tengo menos de 18 años</OPTION>
						<OPTION name="edad" value="+18">Tengo más de 18 años</OPTION>
					</SELECT>
					
					<BR/><BR/>
				</FIELDSET>
				
				<BR/><BR/>
				
				<FIELDSET>
					<LEGEND>Sugerencia</LEGEND>
					
					<BR/>
					
					<TEXTAREA name="sugerencia" requiered cols="40" rows="8" form="FormSugerencia"></TEXTAREA>
					
					<BR/>
					
					<P>Máximo 300 carácteres</P>
					
					<BR/>
				</FIELDSET>
				
				<BR/>
				
				<INPUT type="submit" value="Enviar Sugerencia" name="SugerenciaEnviada"/>
			</P>
		</FORM>
	</DIV>
</BODY>
</HTML>