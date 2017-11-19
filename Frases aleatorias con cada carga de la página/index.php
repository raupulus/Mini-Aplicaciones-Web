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
        <title>Frases Aleatorias</title>
        <meta name="description" content="Frases Aleatorias al cargar página" />
        <meta name="keywords" content="frases aleatorias, cargar página, php, código, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY>
    <H1 id="titulo1">Frases aleatorias</H1>
    <H2 id="titulo2">Una frase distinta cada vez que entras</H2>
    <P>Esta aplicación genera una frase aleatoria cada vez que se carga esta página permitiendo dar por ejemplo varias bienvenidas, también se puede aplicar para otros motivos.</P>
    <DIV class="ejemplo">
        <?php
        $frases = array(//Creo array con frases
            1=>"Hola navegante.",
            2=>"Bienvenido a mi web.",
            3=>"Gracias por visitarnos.",
            4=>"Te recomiendo visitar nuestro foro.",
            5=>"Puedes enviarnos las sugerencias que quieras.",
            6=>"No dejes de visitarnos estos días, tendremos nuevas sorpresas.",
        );
        $aleatorio = rand(1,6);//Crea un número aleatorio entre 1 y 6
        echo "La frase aleatoria del momento es: <BR/>";
        echo "<B style='color:red; font-size:2em;'>$frases[$aleatorio]</B>";
        echo "<BR/><BR/>";
        ?>
    </DIV>

    <DIV style="color:yellow;">
        <?php
        //Aquí creo bucle para mostrar todo el array con las frases y se pueda ver las que existen
        echo "<BR/><BR/>";
        echo "<H3 style='font-size:2.2em; text-align:center;'>Listado de frases disponibles:</H3>";
        $i = 1;
        $limite = count($frases);
        while ($i<=$limite) {
            echo "<B style=color:red>".$i." - </B>";
            echo $frases[$i];
            echo "<BR/>";
            $i++;
        }
        ?>
    </DIV>
</BODY>
</HTML>
