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
        <title>Formulario recomendar WEB</title>
        <meta name="description" content="Formulario recomendar WEB" />
        <meta name="keywords" content="aformulario, mail, email, recomendar, web, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY>
    <H1 id="titulo1">Formulario recomendar WEB</H1>
    <H2 id="titulo2">Recomienda la página web a un amigo</H2>
    <P>Este formulario procesará los datos introducidos y enviará una recomendación del sitio a un amigo</P>
    <DIV class="ejemplo">
        <H3>Recomienda este sitio a un amigo:</H3>
        <FORM method="POST" action="procesar.php">
            <P>
                Tu nombre:
                <BR/>
                <INPUT type="text" name="tunombre" size=20/>
                <BR/>

                Tu email:
                <BR/>
                <INPUT type="text" name="tuemail" size="20"/>
                <BR/>

                Nombre de tu amigo:
                <BR/>
                <INPUT type="text" name="nombreamigo" size="20"/>
                <BR/>

                Email de tu amigo
                <BR/>
                <INPUT type="text" name="emailamigo" size="20"/>
                <BR/><BR/>

                <INPUT type="submit" value="Recomendar" name="B1"/>
            </P>
        </FORM>

        <?php

        ?>
    </DIV>
</BODY>
</HTML>
