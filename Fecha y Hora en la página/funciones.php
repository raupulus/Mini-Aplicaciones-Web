<?php
    function mostrar_fh() {
        echo "Hoy es"." ",date("d/m/Y"),"y la hora actual es"." ",date("h:i:s"),".<BR/><BR/>Queremos daros la bienvenida a nuestra WEB.";
        echo "<BR/><BR/>";
        echo "Otro Ejemplo más corto:<BR/>";
        echo date("d/m/Y")," - ".date("h:i");
    }

    function mostrar_fh_reducido() {
        echo date("h:i");
        echo "<BR/>";
        echo date("d/m");
        echo "<BR/>";
        echo date("Y");
    }
?>
