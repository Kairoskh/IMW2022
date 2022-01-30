<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conteo con For, numeros primos con For">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
    <link rel="icon" href="favicon.ico">
    <style>
        body{
            background-color: black;
            color: white;
            text-align: center;
        }
        span {
            color: white;
            background-color: blue;
            border-radius: 10px;
            padding: 5px;
        }
        table {
            border-collapse: collapse;
            border: 5px solid greenyellow;
            display: inline-flex;
        }
        th, td {
            border: 5px solid greenyellow;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Ejercicios con el bucle: <span>for</span></h1>
<?php
echo "<h2>Mostrar los números en disminución de 760 a 380 de 20 en 20:<h2>";
    echo "<table><tr>";
        for ($x = 760; $x>=380; $x=$x-20){
            echo"<td> $x <br></td>";
}
    echo "</table></tr>";
    echo "<br><br>";
    echo "<h2>Mostrar los números primos del 2 al 10:</h2>";
function primo($numero){
    if ($numero == 2 || $numero == 3 || $numero == 5 || $numero == 7) {
    return True;
} 
    else {
// Comprobar si es par
    if ($numero % 2 != 0) {
// Comprobar si es son impares
    for ($primo = 3; $primo <= sqrt($numero); $primo += 2) {
    if ($numero % $primo == 0) {
    return False;
}
}
    return True;
}
}
    return False;
}
    echo "<table><tr>";
    for ($primo=2; $primo<=10; $primo++) {
    if (primo($primo)) {
    echo "<td>El número ".$primo." es primo.</td>";
} 
    else{
    echo "<td>El número ".$primo." NO es primo.</td>";
}
}
    echo "<//table></tr>";
?>
</body>
</html>