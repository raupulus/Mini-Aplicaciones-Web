<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Calcular área del rectángulo</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Calcular area del rectángulo"/>
	<META name="keywords" content="área, area, rectángulo, calcular, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Calcular área del rectángulo</H1>
	<H2 id="titulo2">Programa para calcular área de un rectángulo</H2>
	<P>Introduce los valores necesarios para poder calcular</P>
	<DIV class="ejemplo">
		<DIV>
			<H3 style="font-size:2em;color:black;">Introduce base y la altura:</H3>
			<BR/>
			<DIV>
				Base:
				<INPUT id="inputbase" type="text" name="base"/>
			</DIV>

			<DIV>
				Altura:
				<INPUT id="inputaltura" type="text" name="altura"/>
			</DIV>
		</DIV>

		<DIV>
			<BR/>
			<!--Para calcular se llama a la función de Javascript que he creado con el nombre "calculararea()"-->
			<INPUT id="inputcalcular" type="button" value="Calcular" OnClick="calculararea()" style="background-color:black;color:orange;width:200px;height:80px;font-size:1.4em;border-color:red;cursor: pointer;"/>
		</DIV>
		<BR/>
		<P style="font-stretch:ultra-expanded;color: dodgerblue;">Después de introducir base y altura pulsa sobre: "<B>Calcular</B>"</P>
		
		<BR/><BR/>
		<H3 style="font-size:2em;">Resultado:</H3>
		<BR/>
		<INPUT id="inputresultado" name="resultado" size="27"/>
	</DIV>
</BODY>
</HTML>
