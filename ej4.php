<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES REFUERZO </title>
</head>
<body>
    <h1> Ejercicio 4 </h1>
<?php

function calcularPreciosFinales($precios, $descuentos) {
    $iva = 0.21;
    $preciosFinales = array();

    foreach ($precios as $key => $precio) {
        $descuento = $precio * ($descuentos[$key] / 100);
        $precioConDescuento = $precio - $descuento;
        $precioFinal = $precioConDescuento * (1 + $iva);

        $preciosFinales[] = round($precioFinal, 2); 
    }

    return $preciosFinales;
}

$productos = array(10, 55, 43.99, 12.50);
$descuentos = array(0, 10, 5, 15);

$preciosFinales = calcularPreciosFinales($productos, $descuentos);

echo "Precios finales con descuento e IVA:\n";
for ($i = 0; $i < count($productos); $i++) {
    echo "Producto ", ($i + 1), ": ", $preciosFinales[$i], " euros\n";
}

?>
