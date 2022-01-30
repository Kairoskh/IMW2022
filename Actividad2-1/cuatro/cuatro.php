<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dados con switch">
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
            display: inline-block;
        }
        img {
            height: 185px;
            width: 200px;
        }
    </style>
</head>
<body>
<h1>Resultado de los dados <span>Switch</span></h1>
<br>
<?php
$x = (rand(1,6));

switch ($x) {
case "1":
    echo "Ha salido el lado 1 del dado:";
    echo "<br><br>";
    echo "<img src='dado1.png' alt='1'>";
    break;
case "2":
    echo "Ha salido el lado 2 del dado:";
    echo "<br><br>";
    echo "<img src='dado2.png' alt='2'>";
    break;
case "3":
    echo "Ha salido el lado 3 del dado:";
    echo "<br><br>";
    echo "<img src='dado3.png' alt='3'>";
    break;
case "4":
    echo "Ha salido el lado 4 del dado:";
    echo "<br><br>";
    echo "<img src='dado4.png' alt='4'>";
    break;
case "5":
    echo "Ha salido el lado 5 del dado:";
    echo "<br><br>";
    echo "<img src='dado5.png' alt='5'>";
    break;
case "6":
    echo "Ha salido el lado 6 del dado:";
    echo "<br><br>";
    echo "<img src='dado6.png' alt='6'>";
    break;
  default:
    echo "No deberias ver esto!";
}
?>
</body>
</html>