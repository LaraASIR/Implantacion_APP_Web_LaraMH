<?php
function esPalindromo($cadena) {
    // Convertimos la cadena a minúsculas y eliminamos espacios
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // Comprobamos si la cadena es igual a su inversa
    return $cadena === strrev($cadena);
}

// Ejemplo de uso
$texto = "anita lava la tina";
if (esPalindromo($texto)) {
    echo "'$texto' es un palíndromo.";
} else {
    echo "'$texto' no es un palíndromo.";
}
?>

