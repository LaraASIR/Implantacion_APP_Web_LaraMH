<?php
// Funciones de variables
$var1 = "Hola";
$var2 = null;
$var3 = 0;
$var4 = array(1, 2, 3);

echo "isset(\$var1): " . (isset($var1) ? 'true' : 'false') . "<br>\n";
echo "is_null(\$var2): " . (is_null($var2) ? 'true' : 'false') . "<br>\n";
echo "empty(\$var3): " . (empty($var3) ? 'true' : 'false') . "<br>\n";
echo "is_int(\$var3): " . (is_int($var3) ? 'true' : 'false') . "<br>\n";
echo "is_float(\$var3): " . (is_float($var3) ? 'true' : 'false') . "<br>\n";
echo "is_bool(\$var3): " . (is_bool($var3) ? 'true' : 'false') . "<br>\n";
echo "is_array(\$var4): " . (is_array($var4) ? 'true' : 'false') . "<br>\n";
echo "intval(\$var1): " . intval($var1) . "<br>\n";
echo "floatval(\$var1): " . floatval($var1) . "<br>\n";
echo "boolval(\$var1): " . (boolval($var1) ? 'true' : 'false') . "<br>\n";
echo "strval(\$var3): " . strval($var3) . "<br>\n";

// Funciones de cadenas
$cadena = "Hola Mundo";
$cadena2 = "hola mundo";
$token = " ";

echo "strlen(\$cadena): " . strlen($cadena) . "<br>\n";
echo "strcmp(\$cadena, \$cadena2): " . strcmp($cadena, $cadena2) . "<br>\n";
echo "strcasecmp(\$cadena, \$cadena2): " . strcasecmp($cadena, $cadena2) . "<br>\n";
echo "explode(\$cadena, \$token): " . implode(", ", explode($token, $cadena)) . "<br>\n";
echo "implode(\$token, explode(\$token, \$cadena)): " . implode($token, explode($token, $cadena)) . "<br>\n";
echo "strtolower(\$cadena): " . strtolower($cadena) . "<br>\n";
echo "strtoupper(\$cadena): " . strtoupper($cadena) . "<br>\n";
echo "strpos(\$cadena, 'Mundo'): " . strpos($cadena, 'Mundo') . "<br>\n";

// Funciones de arrays
$array = array(1, 2, 3, 4, 5);
$array_assoc = array("a" => 1, "b" => 2, "c" => 3);

echo "count(\$array): " . count($array) . "<br>\n";
sort($array);
echo "sort(\$array): " . implode(", ", $array) . "<br>\n";
rsort($array);
echo "rsort(\$array): " . implode(", ", $array) . "<br>\n";
ksort($array_assoc);
echo "ksort(\$array_assoc): " . implode(", ", $array_assoc) . "<br>\n";
krsort($array_assoc);
echo "krsort(\$array_assoc): " . implode(", ", $array_assoc) . "<br>\n";
echo "array_values(\$array_assoc): " . implode(", ", array_values($array_assoc)) . "<br>\n";
echo "array_keys(\$array_assoc): " . implode(", ", array_keys($array_assoc)) . "<br>\n";
echo "array_key_exists('a', \$array_assoc): " . (array_key_exists('a', $array_assoc) ? 'true' : 'false') . "<br>\n";
?>
