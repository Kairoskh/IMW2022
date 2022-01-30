<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <title>Ejercicio 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Suma de dados con for">
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
            background-color: green;
            border-radius: 15px;
            padding: 10px;
            display: inline-flex;
        }
        img {
            height: 100px;
            width: 100px;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Resultado de los dados con bucle:<span>for</span></h1>
<?php
//Variables necesarias
$tirada= rand(2, 10);
$suma = 0;
echo "<h2>Han salido  <span>$tirada</span> dados </h2><br>";
//Se realizan las tiradas segun los valores de $dados que hayan salido
for ($i = 1; $i <=$tirada; $i++) {
//Se muestra cada dado con su imagen segun el valor de $dado resultante 
    $dado =rand(1,6);
    switch ($dado) {
        case "1":
            echo "<img src='dado1.png' alt='1'>";
            break;
        case "2":
            echo "<img src='dado2.png' alt='2'>";
            break;
        case "3":
            echo "<img src='dado3.png' alt='3'>";
            break;
        case "4":
            echo "<img src='dado4.png' alt='4'>";
            break;
        case "5":
            echo "<img src='dado5.png' alt='5'>";
            break;
        case "6":
            echo "<img src='dado6.png' alt='6'>";
            break;
          default:
            echo "No deberias ver esto!";
        }
    $suma += $dado;
}
echo "<p>La suma total de los dados es de $suma.</p>";
?>

</body>
</html>
