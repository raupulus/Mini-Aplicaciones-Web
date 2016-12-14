<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Firmar</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Plantilla de Ejemplo"/>
	<META name="keywords" content="ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Firma a Imagen</H1>
	<H2 id="titulo2">Mini aplicación para firmar</H2>
	<P>Esta aplicación consta de una capa <STRONG>"CANVAS"</STRONG> donde se recogerá una firma y esta será exportada a una imagen</P>
	<DIV class="cajaPrincipal">
		<P>
			Pulsa en el siguiente título para que se abra el cuadro de firmas:
		</P>
		<BR/>
		<P>
			<H3 onClick="mostrarLienzo(true)">PULSA AQUÍ PARA FIRMAR</H3>
		</P>
		<FORM id="formFirma">
			<CANVAS id="lienzo"></CANVAS>
			<BR/>
			<INPUT type="button" name="limpiar" value="Limpiar" onClick="limpiando()"/>
			<INPUT type="button" name="guardar" value="Guardar" onClick="guardarImagen()"/>
		</FORM>
	</DIV>
<?php

?>
</BODY>
</HTML>
