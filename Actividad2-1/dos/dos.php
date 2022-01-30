<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Notas con if/elseif/else">
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
            border-radius: 15px;
            padding: 5px;
            display: inline-block;
        }
        img {
            width: 250px;
            height: 250px;
        }
    </style>
</head>
<body>
<h1>Resultado de Notas con <span>If/else</span></h1>
<br>
<?php
$x = (rand(1,10));
if ($x<=4){
    echo "<img src='insuficiente.png' alt='Insuficiente'>";
    echo "<p>El resultado es: $x <span>Insuficiente</span></p>";
}
elseif ($x==5){
    echo "<img src='suficiente.png' alt='Suficiente'>";
    echo "<p>El resultado es: $x <span>Suficiente</span></p>";
}
elseif ($x==6){
    echo "<img src='bien.png' alt='Bien'>";
    echo "<p>El resultado es: $x <span>Bien</span></p>";
}
elseif ($x==7 or $x==8){
    echo "<img src='notable.png' alt='Notable'>";
    echo "<p>El resultado es: $x <span>Notable</span></p>";
}
else { 
    echo "<img src='sobresaliente.png' alt='Sobresaliente'>";
    echo "<p>El resultado es: $x <span>Sobresaliente</span></p>";
}
?>
</body>
</html>