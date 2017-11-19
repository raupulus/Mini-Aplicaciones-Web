<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Proteger página por contraseña</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Proteger página por contraseña"/>
    <META name="keywords" content="proteger, contraseña, pagina, proteger pagina, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

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
