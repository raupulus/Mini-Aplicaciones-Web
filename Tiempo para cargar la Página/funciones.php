<?php
$tiempoinicial = 0;
$tiempofinal = 0;

function iniciar_contador() {
    global $tiempoinicial;

    $tiempo = microtime();
    $tiempo = explode(" ",$tiempo);
    $tiempo = $tiempo[1] + $tiempo[0];
    $tiempoinicial = $tiempo;
}

function finalizar_contador() {
    global $tiempofinal;

    $tiempo = microtime();
    $tiempo = explode(" ",$tiempo);
    $tiempo = $tiempo[1] + $tiempo[0];
    $tiempofinal = $tiempo;
}

function mostrar_tiempo() {
    global $tiempofinal;
    global $tiempoinicial;

    $tiempototal = number_format($tiempofinal - $tiempoinicial,20);
    return $tiempototal;
}
?>
