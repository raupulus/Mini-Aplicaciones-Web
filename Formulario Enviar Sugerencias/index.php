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
        <title>Formulario de sugerencias</title>
        <meta name="description" content="Aplicación" />
        <meta name="keywords" content="formulario, aplicación, programación, Raúl Caro Pastorino, Fryntiz" />
        <meta name="author" content="Raúl Caro Pastorino" />
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link rel="stylesheet" href="./CSS/styles.css" />
        <link rel="stylesheet" href="./CSS/app.css" />
        <script src="JS/scripts.js"></script>
        <script src="JS/app.js"></script>
    </head>

<BODY>
    <H1 id="titulo1">Título de la página</H1>
    <H2 id="titulo2">Sección de que se trata</H2>
    <P>Descripción</P>
    <DIV class="ejemplo">
        <FORM id="FormSugerencia" name="FormSugerencia" method="POST" action="procesar.php" onSubmit="return validarFormulario()">
            <P>
                <FIELDSET>
                    <LEGEND>Datos Personales</LEGEND>

                    <BR/>

                    <LABEL for="nombre">*Tu nombre:</LABEL>
                    <INPUT type="text" name="nombre" size=40 maxlength="100" requiered/>
                    <BR/><BR/>

                    <LABEL for="email">*Tu email:</LABEL>
                    <INPUT type="email" name="email" size="40" maxlength="100" requiered/>
                    <BR/><BR/>

                    <LABEL for="edad">¿Eres mayor o menor de edad?</LABEL>
                    <SELECT>
                        <OPTION name="edad" value="no">Seleccionar Edad</OPTION>
                        <OPTION name="edad" value="-18">Tengo menos de 18 años</OPTION>
                        <OPTION name="edad" value="+18">Tengo más de 18 años</OPTION>
                    </SELECT>

                    <BR/><BR/>
                </FIELDSET>

                <BR/><BR/>

                <FIELDSET>
                    <LEGEND>Sugerencia</LEGEND>

                    <BR/>

                    <TEXTAREA name="sugerencia" requiered cols="40" rows="8" form="FormSugerencia"maxlength="300"></TEXTAREA>

                    <BR/>

                    <P>Máximo 300 carácteres</P>

                    <BR/>
                </FIELDSET>

                <BR/>

                <INPUT type="submit" value="Enviar Sugerencia" name="SugerenciaEnviada"/>
            </P>
        </FORM>
    </DIV>
</BODY>
</HTML>
