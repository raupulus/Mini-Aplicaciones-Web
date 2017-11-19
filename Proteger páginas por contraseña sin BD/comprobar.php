        <?php
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];

        if($usuario=="usuario" && $pass=="clave") {
            $valido = "si";
        } else {
            $valido = "no";
        }
        if ($valido == "si") {
            echo "<SCRIPT type='text/javascript'>alert('Bienvenido, has introducido correctamente el usuario y la contraseña.')</SCRIPT>";
            //header("Location: webprotegida.php");
            include "webprotegida.php";
        } else {
            //echo "Vuelve a intentarlo:<BR/>El usuario o la contraseña son incorrectos.";
            include "error.php";
        }
        ?>
