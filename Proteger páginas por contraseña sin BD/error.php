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
        <title>Proteger página por contraseña</title>
        <meta name="description" content="Proteger página por contraseña" />
        <meta name="keywords" content="proteger, contraseña, pagina, proteger pagina, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY>
    <H1 id="titulo1">ERROR</H1>
    <H2 id="titulo2">Ha ocurrido un error</H2>
    <P>El error probablemente sea debido a que has introducido mal tu usuario o clave, revisa estos datos y vuelve a intentarlo.</P>
    <DIV class="ejemplo">
        Vuelve a intentarlo:
        <BR/>
        El usuario o la contraseña son incorrectos.
        <BR/>
        <?php
        echo "<A href=".$_SERVER['HTTP_REFERER'].">Volver</A>";
        ?>
    </DIV>
</BODY>
</HTML>
