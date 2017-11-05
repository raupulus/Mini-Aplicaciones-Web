<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Contador de visitas</title>
        <meta name="description" content="Contador de visitas"/>
        <meta name="keywords" content="Contador de visitas, contador, visitas, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

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
