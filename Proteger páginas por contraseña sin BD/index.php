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
    <H1 id="titulo1">Proteger página por contraseña</H1>
    <H2 id="titulo2">Acceder a un sitio web utilizando contraseña</H2>
    <P>Esta aplicación trata de poner una contraseña que te obliga a identificarte para restringir el acceso hacia un sitio web sin utilizar base de datos, seguridad relativa pero puede ser de ayuda para tener algo rápido y simple.</P>
    <DIV class="ejemplo">
        <FORM method="POST" action="comprobar.php">
            <TABLE>
                <TR>
                    <TD>Usuario:</TD>
                    <TD><INPUT type="text" name="usuario" size="20"/></TD>
                </TR>

                <TR>
                    <TD>Contraseña:</TD>
                    <TD><INPUT type="password" name="pass" size="20"/></TD>
                </TR>

                <TR>
                    <TD></TD>
                    <TD><INPUT type="submit" value="Entrar" name="privado"/></TD>
                </TR>
            </TABLE>
        </FORM>
    </DIV>
</BODY>
</HTML>
