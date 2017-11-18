<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Formulario recomendar WEB</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Formulario recomendar WEB"/>
    <META name="keywords" content="formulario, mail, email, recomendar, web, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

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
