<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Contador de visitas</TITLE>
	<META charset="utf-8"/>
	<META name="description" content="Contador de visitas"/>
	<META name="keywords" content="Contador de visitas, contador, visitas, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
	<META name="author" content="Raúl Caro Pastorino"/>
	<LINK rel="shortcut icon" href="./images/favicon.png"/>
	<LINK rel="stylesheet" href="./CSS/styles.css"/>
	<SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY>
	<H1 id="titulo1">Contador de visitas</H1>
	<H2 id="titulo2">Sencillo contador de visitas</H2>
	<P>Este sencillo contador de visitas se puede utilizar para cada página independiente. Se media a través del archivo "visitas.txt"</P>

<!--Contador de visitas de solo una página-->
	<DIV class="ejemplo">
		<?php
		$cuenta = "visitas2.txt";//Donde se almacenan las visitas de esta página
		function contador($cuenta) {//Función que importa la variable $cuenta
			$fp = fopen($cuenta, rw);//Abre el archivo con escritura
			$num = fgets($fp,20);//Obtiene el valor
			$num += 1;//Suma "1" al valor actual
			print "Número de visitas: ";
			echo "$num";
			exec("rm -rf $cuenta");
			exec("echo $num > $cuenta");
		}
		if(!file_exists($cuenta)) {//Inicia el archivo visitas1.txt si no existe
			exec("echo 1 > $cuenta");
		}
		contador($cuenta);//Ejecuta la función
		?>
	</DIV>
	<BR/>
	<A href="index.php" title="Principal">Volver a la Web principal</A>

</BODY>
</HTML>
