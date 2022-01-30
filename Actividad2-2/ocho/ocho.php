<!DOCTYPE html>
<html>
    <head>
    <title>Ejercicio 8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Utilizar do, while">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
    <link rel="icon" href="favicon.ico">
        <style>
            body {
                text-align: center;
                background-color: black;
                color: white;
                width: 100%;
            }
            span {
                color: white;
                background-color: blue;
                border-radius: 15px;
                padding: 5px;
                display: inline-block;
            }
            img {
                width: 50px;
                height: 50px;
            }
            table {
                border-collapse: collapse;
                border: 1px solid blue;
                display: inline-flex;
            }
            th, td {
                border: 5px solid blue;
                padding: 15px;
                margin: 10px;
            }
        </style>
    </head>
<body>
<h1>Ejercicios con <span>do-while</span></h1>
<?php
//Primero mostrar números pares entre 0 y 10.
echo "<h2>Números pares entre 0 y 10:</h2>";
$x = 0;
    echo "<table><tr>";
do {$x++;
    if ($x % 2 == 0){
    echo "<td> $x </td>";
    } 
}
while ($x <= 10);  
    echo "</tr></table>";
    echo "<br>";
//Segundo mostrar números en decremento.  
    echo "<h2>Mostrar los números de 700 a 350 de 50 en 50:</h2>";
    echo "<tr><table>";
$valor = 700;
do {
    echo"<td>$valor<br></td>";
    $valor=$valor-50;
}
while ($valor>=350);
    echo "</tr></table>";
    echo "<br>";
//Tercero números pares e impares entre 1 y 70 con imagenes en cada caso.
    echo "<h2>Si un número aleatorio entre 1 y 70 es par, se muestra un  ✓, si no es par se muestra una X:</h2>";
    echo "<tr><table>";
$numero = rand(1,70);
do {
    if ($numero % 2 == 0){
        echo "<td> $numero<br></td>";
        echo "<td><img src='par.png' alt='Número par'> </td>";
}
    else{
        echo "<td> $numero<br></td>";
        echo "<td><img src='nopar.png' alt='Número no par'> </td>";
    } 
}
while ($valor<=70);
    echo "</tr></table>";
?>
</body>
</html>
