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
        <title>Firmar</title>
        <meta name="description" content="Firmar"/>
        <meta name="keywords" content="firmar, firmas, aplicación, programación, Raúl Caro Pastorino, Fryntiz"/>
        <meta name="author" content="Raúl Caro Pastorino"/>
        <link rel="shortcut icon" href="./images/favicon.png"/>
        <link rel="stylesheet" href="./CSS/styles.css"/>
        <link rel="stylesheet" href="./CSS/app.css"/>
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY>
    <H1 id="titulo1">Firma a Imagen</H1>
    <H2 id="titulo2">Mini aplicación para firmar</H2>
    <P>Esta aplicación consta de una capa <STRONG>"CANVAS"</STRONG> donde se recogerá una firma y esta será exportada a una imagen</P>
    <DIV class="cajaPrincipal">
        <P>
            Pulsa en el siguiente título para que se abra el cuadro de firmas:
        </P>
        <BR/>
        <P>
            <H3 onClick="mostrarLienzo(true)">PULSA AQUÍ PARA FIRMAR</H3>
        </P>
        <FORM id="formFirma">
            <CANVAS id="lienzo"></CANVAS>
            <BR/>
            <INPUT type="button" name="limpiar" value="Limpiar" onClick="limpiando()"/>
            <INPUT type="button" name="guardar" value="Guardar" onClick="guardarImagen()"/>
        </FORM>
    </DIV>
<?php

?>
</BODY>
</HTML>
