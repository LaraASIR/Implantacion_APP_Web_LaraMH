<?php
// Archivo Ejercicio3_matematicas.php

function resolverEcuacionCuadratica($a, $b, $c) {
    // Comprobamos que 'a' no sea cero (no sería una ecuación cuadrática)
    if ($a == 0) {
        return FALSE; // No es una ecuación cuadrática
    }

    // Calculamos el discriminante: Δ = b² - 4ac
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        // Si el discriminante es negativo, no hay soluciones reales
        return FALSE;
    } elseif ($discriminante == 0) {
        // Si el discriminante es cero, hay una única solución (doble)
        $solucion = -$b / (2 * $a);
        return [$solucion]; // Devolvemos un array con una solución
    } else {
        // Si el discriminante es positivo, hay dos soluciones reales
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return [$solucion1, $solucion2]; // Devolvemos un array con dos soluciones
    }
}
?>
