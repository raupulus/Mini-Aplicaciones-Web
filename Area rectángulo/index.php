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
        <title>Calcular área del rectángulo</title>
        <meta name="description" content="Calcular area del rectángulo"/>
        <meta name="keywords" content="área, area, rectángulo, calcular, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

    <body>
        <div id="cajatitulo">
            <h1 id="titulo">Calcular área del rectángulo</h1>
            <h2 id="subtitulo">Programa para calcular área de un rectángulo</h2>
        </div>


        <div id="cajadescripcion">
            <h3>Modo de uso</h3>

            <p>
                Introduce los valores necesarios para poder calcular
            </p>
        </div>


        <div id="cajacontenido">
            <div id="aplicacion">
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
