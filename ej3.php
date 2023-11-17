<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES REFUERZO </title>
</head>
<body>
    <h1> Ejercicio 3 </h1>
<?php
function calculaSuma($rango){
    $suma = 0;
    $min = min($rango);
    $max = max($rango);
    for ($i = $min; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $suma += $i;
        }
    }
    return $suma;
}

$rango = array(1, 10);
echo "La suma de los números pares entre " . $rango[0] . " y " . $rango[1] . " es: " . calculaSuma($rango);
?>
