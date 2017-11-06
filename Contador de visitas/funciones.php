<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

 // Archivo donde almacenar las visitas
 $archivos = ['visitas.csv', 'visitas1.csv', 'visitas2.csv'];
 $visitas = [0, 0, 0];
 $porcentajes = [0, 0, 0];

 //Variables
 $total_visitas = 0;

//Función que abre el archivo con las visitas
function contador($archivo_abrir) {
    //Inicia el archivo visitas.txt si no existe
    if (!file_exists($archivo_abrir)) {
        exec("echo 1 > $archivo_abrir");
    }

    // Abre el archivo con escritura
    $fp = fopen($archivo_abrir, 'rw');

    // Obtener valor dentro del archivo
    $aumentar_visitas = fgets($fp, 20) + 1;

    // Cerrar archivo y almacenar nuevo valor
    exec("rm -rf $archivo_abrir");
    exec("echo $aumentar_visitas > $archivo_abrir");
}

 // Contador de visitas GLOBAL
function visitas() {
    global $archivos;
    global $visitas;
    global $porcentajes;
    global $total_visitas;

    // Abrir archivos
    foreach ($archivos as $k => $archivo) {
        $abre = fopen($archivo, "r");
        $visitas[$k] = fread($abre, filesize($archivo));
        $total_visitas += $visitas[$k];
    }

    // Calcular porcentajes
    foreach ($visitas as $k => $visita) {
        $porcentajes[$k] = $visita * 100 / $total_visitas;
        $porcentajes[$k] = intval($porcentajes[$k], 10);

        echo "Página $k → <strong>$visitas[$k]</strong>visitas  (<strong>$porcentajes[$k] %)</strong>"." ";
        echo "<div class=barraEstadistica><IMG width=$porcentajes[$k] src=./images/cuadrado.jpg alt=Progreso /></div>";
        echo "<br /><br />";
    }

    //Resumen total
    $todo = $porcentajes[0]+$porcentajes[1]+$porcentajes[2];
    echo "<HR size=2 color=white width=100%/>";
    echo "Total Visitas → <strong>$total_visitas</strong> con un <B>$todo %</strong> de precisión";
    echo "<div class=barraEstadistica><img width=$todo src=./images/cuadrado.jpg alt=Progreso /></div>";
    echo "<BR/><BR/>";
}
?>
