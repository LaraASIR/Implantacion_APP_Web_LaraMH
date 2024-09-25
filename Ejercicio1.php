<?php
// Coeficientes de la ecuación cuadrática ax² + bx + c = 0
$a = 1;
$b = 1;
$c = 1;

// Comprobamos que 'a' no sea cero (no sería una ecuación cuadrática)
if ($a == 0) {
    echo "Esto no es una ecuación cuadrática, ya que a = 0.";
} else {
    // Calculamos el discriminante: Δ = b² - 4ac
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        // Si el discriminante es negativo, no hay soluciones reales
        echo "La ecuación no tiene soluciones reales.";
    } elseif ($discriminante == 0) {
        // Si el discriminante es cero, hay una única solución (doble)
        $solucion = -$b / (2 * $a);
        echo "La ecuación tiene una solución doble: x = " . $solucion;
    } else {
        // Si el discriminante es positivo, hay dos soluciones reales
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "La ecuación tiene dos soluciones reales: x1 = " . $solucion1 . ", x2 = " . $solucion2;
    }
}
?>

