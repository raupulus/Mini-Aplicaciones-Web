<?php
$usuario = filter_input(INPUT_POST, 'usuario');
$pass = filter_input(INPUT_POST, 'pass');

if ($usuario === 'usuario' && $pass === 'clave') {
?>
    <SCRIPT type='text/javascript'>
        alert('Bienvenido, has introducido correctamente el usuario y la contraseña.')
    </SCRIPT>
<?php
    //header("Location: webprotegida.php");
    include "webprotegida.php";
} else {
    //echo "Vuelve a intentarlo:<BR/>El usuario o la contraseña son incorrectos.";
    include "error.php";
}
?>
