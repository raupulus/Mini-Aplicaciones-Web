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
		<SELECT>
			<OPTION>2 (BINARIO)</OPTION>
			<OPTION>3</OPTION>
			<OPTION>4</OPTION>
			<OPTION>5</OPTION>
			<OPTION>6</OPTION>
			<OPTION>7</OPTION>
			<OPTION>8 (OCTAL)</OPTION>
			<OPTION>9</OPTION>
			<OPTION>10 (DECIMAL)</OPTION>
			<OPTION>11</OPTION>
			<OPTION>12</OPTION>
			<OPTION>13</OPTION>
			<OPTION>14</OPTION>
			<OPTION>15</OPTION>
			<OPTION>16 (HEXADECIMAL)</OPTION>
		</SELECT>


	<BR/>

	Quieres pasarlo a la siguiente base:
		<SELECT>
			<OPTION>2 (BINARIO)</OPTION>
			<OPTION>3</OPTION>
			<OPTION>4</OPTION>
			<OPTION>5</OPTION>
			<OPTION>6</OPTION>
			<OPTION>7</OPTION>
			<OPTION>8 (OCTAL)</OPTION>
			<OPTION>9</OPTION>
			<OPTION>10 (DECIMAL)</OPTION>
			<OPTION>11</OPTION>
			<OPTION>12</OPTION>
			<OPTION>13</OPTION>
			<OPTION>14</OPTION>
			<OPTION>15</OPTION>
			<OPTION>16 (HEXADECIMAL)</OPTION>
		</SELECT>

		<BR/>

		<INPUT type="button" value="Calcular" onclick="accion()"/>
		<DIV>
			Resultado:<P id="ResultadoBase"></P>
		</DIV>
	</DIV>
<?php

?>
</BODY>
</HTML>
