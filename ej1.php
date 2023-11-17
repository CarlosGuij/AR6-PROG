<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES REFUERZO </title>
</head>
<body>
    <h1> Ejercicio 1 </h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    $puntos = [];
function calculaPuntos($puntos){

    $empates=1;
    $ganado=3;

    $em = $empates + $_POST['empatados'];
    $ga = $ganado * $_POST['ganados'];
    $sumatot = $em + $ga;
    array_push($puntos, $sumatot);
    return $puntos;
}
    $resultado = calculaPuntos($puntos);
    var_dump ($resultado);
}

?>

<form method="POST" action="">
    <label for="ganados">GANADOS:</label>
    <input type="number" id="ganados" name="ganados" value="">
    <label for="perdidos">PERDIDOS:</label>
    <input type="number" id="perdidos" name="perdidos" value="">
    <label for="empatados">EMPATADOS:</label>
    <input type="number" id="empatados" name="empatados" value="">
    <input type="submit" value="CALCULAR">
</form>