<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lanzar moneda">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
    <link rel="icon" href="favicon.ico">
    <style>
    body{
        background-color: black;
        color: white;
        text-align: center;
    }
    img {
        height: 320px;
        width: 300px;
    }
    span {
        color: white;
        background-color: blue;
        border-radius: 15px;
        padding: 5px;
        display: inline-block;
    }
    p {
        font-size: 35px;
    }
    </style>
</head>
<body>
<h1>Lanza la moneda realizado con <span>if/else</span></h1>
<h2>Buena suerte, aquí esta el resultado:</h2>
<?php
$moneda=(rand(1,2));

if ($moneda == 1) 
{
	echo "<p><span>¡Ha salido cara!</span></p>";
    echo "<br><br>";
    echo "<img src='cara.png' alt='Cara'>";
}
else 
{
	echo "<p><span>¡Ha salido cruz!</span></p>";
    echo "<br><br>";
    echo "<img src='cruz.png' alt='Cruz'>";
}
?>

</body>
</html>