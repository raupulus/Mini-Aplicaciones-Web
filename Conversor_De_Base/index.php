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
	<H1 id="titulo1">Conversor de Base</H1>
	<H2 id="titulo2">Convierte entre bases</H2>
	<P>Utiliza la siguiente calculadora para convertir a la base que necesites</P>
	<DIV class="ejemplo">
		El número <INPUT type="text" name="entrada" id="entrada" size = "15" maxlength = "15"/> escrito en base:
		<SELECT name="selectEntrada" id="selectEntrada">
			<OPTION value="2">2 (BINARIO)</OPTION>
			<OPTION value="3">3</OPTION>
			<OPTION value="4">4</OPTION>
			<OPTION value="5">5</OPTION>
			<OPTION value="6">6</OPTION>
			<OPTION value="7">7</OPTION>
			<OPTION value="8">8 (OCTAL)</OPTION>
			<OPTION value="9">9</OPTION>
			<OPTION value="10" selected>10 (DECIMAL)</OPTION>
			<OPTION value="11">11</OPTION>
			<OPTION value="12">12</OPTION>
			<OPTION value="13">13</OPTION>
			<OPTION value="14">14</OPTION>
			<OPTION value="15">15</OPTION>
			<OPTION value="16">16 (HEXADECIMAL)</OPTION>
		</SELECT>


	<BR/>

	Quieres pasarlo a la siguiente base:
		<SELECT name="selectSalida" id="selectSalida">
			<OPTION value="2" selected>2 (BINARIO)</OPTION>
			<OPTION value="3">3</OPTION>
			<OPTION value="4">4</OPTION>
			<OPTION value="5">5</OPTION>
			<OPTION value="6">6</OPTION>
			<OPTION value="7">7</OPTION>
			<OPTION value="8">8 (OCTAL)</OPTION>
			<OPTION value="9">9</OPTION>
			<OPTION value="10">10 (DECIMAL)</OPTION>
			<OPTION value="11">11</OPTION>
			<OPTION value="12">12</OPTION>
			<OPTION value="13">13</OPTION>
			<OPTION value="14">14</OPTION>
			<OPTION value="15">15</OPTION>
			<OPTION value="16">16 (HEXADECIMAL)</OPTION>
		</SELECT>

		<BR/>

		<INPUT type="button" value="Calcular" onclick="accion()"/>
	</DIV>

	<DIV class="ejemplo">
		<P id="tituloResultado">
			Resultado:
		</P>

		<BR/>
		<P id="ResultadoBase">

		</P>
	</DIV>
<?php

?>
</BODY>
</HTML>
