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

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Contador de visitas</h1>
            <h2 id="subtitulo">Sencillo contador de visitas</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Este sencillo contador de visitas se puede utilizar para cada página independiente. Se media a través del archivo "visitas.txt"
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
                <!--Contador de visitas de solo una página-->
                <?php
                // Archivo donde almacenar las visitas
                $cuenta = "visitas.txt";

                //Variables
                $total_visitas = 0;

                //Función que abre el archivo con las visitas
                function contador($archivo_abrir) {
                    global $total_visitas;

                    //Inicia el archivo visitas.txt si no existe
                    if (!file_exists($archivo_abrir)) {
                        exec("echo 1 > $archivo_abrir");
                    }

                    // Abre el archivo con escritura
                    $fp = fopen($archivo_abrir, 'rw');

                    // Obtener valor dentro del archivo
                    $total_visitas = fgets($fp, 20) + 1;

                    // Cerrar archivo y almacenar nuevo valor
                    exec("rm -rf $archivo_abrir");
                    exec("echo $total_visitas > $archivo_abrir");
                }

                contador($cuenta);//Ejecuta la función
                ?>

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

                    <!-- Mostrar información -->
                    <div>
                        <?php
                            print "Número de visitas → $total_visitas";
                        ?>
                    </div>

                    <BR/><BR/>
                    <A href="index1.php" title="Otro sitio">Ir a la segunda página con su contador propio</A>
                    <BR/><BR/>
                    <A href="index2.php" title="Otro sitio">Ir a la tercera página con su contador propio</A>
            </div>
        </div>


        <div id="cajafooter">
            <footer>
                <p id="autor">
                    Raúl Caro Pastorino
                </p>

                <p id="licencia">
                    Proyecto bajo licencia <a href="https://www.gnu.org/licenses/gpl-3.0-standalone.html" title="Licencia GPLv3" target="_blank">GPLv3</a>
                    <br />
                    Licencia libre con reconocimiento de autoría y proyectos derivados bajo las mismas condiciones
                </p>

                <p id="repositorios">
                    <a href="https://github.com/fryntiz" title="Repositorios Oficiales de Raúl Caro Pastorino" target="_blank">Repositorios en GitHub Oficial del desarrollador</a>
                </p>

                <p id="fecha">
                    <?=date('d-m-Y H:i');?>
                </p>
            </footer>
        </div>
    </body>
</html>
