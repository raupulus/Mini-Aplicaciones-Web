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
    <meta charset="utf-8" />
    <title>Conversor entre Bases Numéricas</title>
    <meta name="description" content="Calculadora conversor de base para cambiar entre decimal, binaria, octal, hexadecimal y muchas otras" />
    <meta name="keywords" content="calculadora, base, bases, octal, hexadecimal, decimal, binario, binaria, convertir, conversor, convertidor, script, programa, javascript, cambiar base, cambio de base, programación, Raúl Caro Pastorino, Fryntiz" />
    <meta name="author" content="Raúl Caro Pastorino" />
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link rel="stylesheet" href="./CSS/styles.css"/>
    <link rel="stylesheet" href="./CSS/app.css"/>
    <script src="JS/scripts.js"></script>
    <script src="JS/app.js"></script>
<!--Metaetiquetas para Facebook-->
    <meta property="og:title" content="Conversor entre Bases Numéricas" />
    <meta property="og:description" content="Calculadora para convertir entre bases" />
    <meta property="og:image" content="./images/portada.jpg" />
<!--Metaetiquetas para Twitter-->
    <meta name="twitter:title" content="Conversor entre Bases Numéricas" />
    <meta name="twitter:description" content="Calculadora para convertir entre bases" />
    <meta name="twitter:image:src" content="./images/portada.jpg" />
    <meta name="twitter:site" content="@laguialinux" />
    <meta name="twitter:creator" content="@fryntiz" />
<!--Metaetiquetas para Google+-->
    <link href="https://plus.google.com/u/0/b/104205668689475042849/posts" rel="author" />
    <link href="https://plus.google.com/u/0/b/104205668689475042849" rel="publisher" />
    <meta itemprop="name" content="Conversor entre Bases Numéricas" />
    <meta itemprop="description" content="Calculadora para convertir entre bases" />
    <meta itemprop="image" content="./images/portada.jpg" />
</head>

<BODY>
    <div id="cajatitulo">
        <h1 id="titulo">Conversor de Base</h1>
        <h2 id="subtitulo">Calculadora para convertir entre bases</h2>
    </div>


    <div id="cajadescripcion">
        <h3>Modo de uso</h3>

        <p>
            Utiliza la siguiente calculadora para convertir a la base que necesites.
            <br /><br />
            Su utilización es tan sencilla como introducir el valor, seleccionar en que base se encuentra el valor introducido y por último seleccionar la base a la cual queremos convertirlo con la calculadora.
            <br /><br />
            Una vez establecido los parámetros solo tenemos que pulsar sobre <strong>Calcular</strong>
            <br /><br />
            El tamaño máximo es de <strong>17</strong> Dígitos/Carácteres.
            <br /><br />
            En principio está pensado y comprobado para números enteros (INT).
        </p>
    </div>


    <div id="cajacontenido">
        <div id="aplicacion">
            <div id="cajaEntrada">
                El número <input type="text" name="entrada" id="entrada" size = "17" maxlength="17" /> escrito en base:

                <select name="selectEntrada" id="selectEntrada">
                <?php for ($i=16; $i >= 2; $i--): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
                </select>
            </div>

            <div id="cajaDestino">
                Quieres pasarlo a la siguiente base:
                <select name="selectSalida" id="selectSalida">
                    <?php for ($i=2; $i <= 16; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor ?>
                </select>
            </div>

            <div id="cajaResultado">
                <input type="button" value="Calcular" onclick="calcularBase();" />

                <p id="tituloResultado">Resultado:</p>
                <p id="ResultadoBase"></p>
            </div>
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
