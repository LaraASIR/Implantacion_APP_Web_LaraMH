<?php
function filtrarMenoresQue($array, $limite) {
    // Usamos array_filter para filtrar los elementos menores que el límite
    return array_filter($array, function($numero) use ($limite) {
        return $numero < $limite;
    });
}

// Ejemplo de uso:
$numeros = [10, 5, 20, 3, 15, 7];
$limite = 10;
$resultado = filtrarMenoresQue($numeros, $limite);

print_r($resultado); // Muestra los números menores que el límite
?>


