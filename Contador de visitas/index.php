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
		$cuenta = "visitas.txt";//Donde se almacenan las visitas de esta página
		function contador($cuenta) {//Función que importa la variable $cuenta
			$fp = fopen($cuenta, rw);//Abre el archivo con escritura
			$num = fgets($fp,20);//Obtiene el valor
			$num += 1;//Suma "1" al valor actual
			print "Número de visitas: ";
			echo "$num";
			exec("rm -rf $cuenta");
			exec("echo $num > $cuenta");
		}
		if(!file_exists($cuenta)) {//Inicia el archivo visitas.txt si no existe
			exec("echo 1 > $cuenta");
		}
		contador($cuenta);//Ejecuta la función
		?>
	</DIV>
	<BR/>
	
<!--Contador de visitas GLOBAL-->	
	<P>Este contador de visitas es para toda la web de forma global</P>
	<DIV class="ejemplo">
		<?php
		print("Las visitas de la página principal son: ");
		include("visitas.txt");
		echo "<HR size=2 color=white width=100%/>";
		echo "<BR/>";
		print("Las visitas de la segunda página son: ");
		include("visitas1.txt");
		echo "<HR size=2 color=white width=100%/>";
		echo "<BR/>";
		print("Las visitas de la tercera página son: ");
		include("visitas2.txt");
		echo "<HR size=2 color=white width=100%/>";
		echo "<BR/>";

//Media de visitas a la página con porcentajes
		print("<H3>Total de visitas entre todas las páginas</H3>");
		echo "<BR/>";
		function visitas(){//Esta función muestra las estadísticas de las visitas
			$archivo1 = "visitas.txt";//Asignamos archivo
			$archivo2 = "visitas1.txt";
			$archivo3 = "visitas2.txt";
			$abre1 = fopen($archivo1, "r");//Abrimos archivo como lectura
			$abre2 = fopen($archivo2, "r");
			$abre3 = fopen($archivo3, "r");
			$total1 = fread($abre1, filesize($archivo1));
			$total2 = fread($abre2, filesize($archivo2));
			$total3 = fread($abre3, filesize($archivo3));
			$visitas = $total1+$total2+$total3;//Sumando todas las visitas por separado
			$por1 = $total1*100/$visitas;
			$por1 = intval($por1,10);
			$por2 = $total2*100/$visitas;
			$por2 = intval($por2,10);
			$por3 = $total3*100/$visitas;
			$por3 = intval($por3,10);
			
			//Empezamos a escribir (Ojo con CSS para barras: barraEstadistica)
			echo "Página Principal: <B>$total1</B>visitas  (<B>$por1 %)</B>"." ";
			echo "<DIV class=barraEstadistica><IMG width=$por1 src=./images/cuadrado.jpg alt=Progreso/></DIV>";
			echo "<BR/><BR/>";
			echo "Segunda página: <B>$total2</B>visitas (<B>$por2 %)</B>"." ";
			echo "<DIV class=barraEstadistica><IMG width=$por2 src=./images/cuadrado.jpg alt=Progreso/></DIV>";
			echo "<BR/><BR/>";
			echo "Tercera página: <B>$total3</B>visitas (<B>$por3 %)</B>"." ";
			echo "<DIV class=barraEstadistica><IMG width=$por3 src=./images/cuadrado.jpg alt=Progreso/></DIV>";
			echo "<BR/><BR/>";
			
			//Resumen total
			$todo = $por1+$por2+$por3;
			echo "<HR size=2 color=white width=100%/>";
			echo "Total Visitas: <B>$visitas</B> de un <B>$todo %</B>";
			echo "<DIV class=barraEstadistica><IMG width=$todo src=./images/cuadrado.jpg alt=Progreso/></DIV>";
			echo "<BR/><BR/>";
		}
		visitas();
		?>
	</DIV>
	
	
	<BR/><BR/>
	<A href="index1.php" title="Otro sitio">Ir a la segunda página con su contador propio</A>
	<BR/><BR/>
	<A href="index2.php" title="Otro sitio">Ir a la tercera página con su contador propio</A>
</BODY>
</HTML>
