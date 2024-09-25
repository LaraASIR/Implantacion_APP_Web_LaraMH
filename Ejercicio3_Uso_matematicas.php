<?php
// Incluimos el archivo que contiene la función
include 'Ejercicio3_matematicas.php';

// Ejemplo de uso de la función:
$a = 1;
$b = -3;
$c = 2;
$resultado = resolverEcuacionCuadratica($a, $b, $c);

if ($resultado === FALSE) {
    echo "La ecuación no tiene soluciones reales.";
} else {
    echo "Las soluciones de la ecuación son: " . implode(", ", $resultado);
}
?>