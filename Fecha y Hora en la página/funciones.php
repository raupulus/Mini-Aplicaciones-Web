<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

    function mostrar_fh() {
        echo "Hoy es"." ",date("d/m/Y"),"y la hora actual es"." ",date("h:i:s"),".<BR/><BR/>Queremos daros la bienvenida a nuestra WEB.";
        echo "<BR/><BR/>";
        echo "Otro Ejemplo más corto:<BR/>";
        echo date("d/m/Y")," - ".date("h:i");
    }

/**
 * Esta función devuelve una cadena multilínea con la hora, mes y año
 * Todo en versión reducida para verlo de un pronto vistazo.
 * @return [string] Devuelve en un string multilínea hora, mes y año
 */
    function mostrar_fh_reducido() {
        $hora = date('h:i');
        $mes = date('d/m');
        $anio = date('Y');

        // Se unen los valores dentro de esta cadena multilínea
        $resultado = <<<EOS
                $hora
                $mes
                $anio
EOS;
        return $resultado;
    }
?>
