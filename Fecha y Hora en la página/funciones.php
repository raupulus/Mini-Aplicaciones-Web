<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

    function mostrar_fh() {
        $hora = date("h:i:s");
        $hora_min = date("h:i");
        $fecha = date("d/m/Y");
        $anio = date('Y');

        // Se unen los valores dentro de esta cadena multilínea
        $resultado = <<<EOS
            Hoy es $fecha
            <br  /><br  />
            La hora actual es $hora
            <br  /><br  />
            Otro Ejemplo más corto:
            $hora_min
EOS;
        return $resultado;
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
