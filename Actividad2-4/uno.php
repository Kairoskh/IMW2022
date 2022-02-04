<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Función tabla de multiplicar">
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
            background-color: red;
            border-radius: 15px;
            padding: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>Tabla de multiplicar número aleatorio: <span>function</span></h1>
<?php

//Escribe una función que reciba un número como parámetro de entrada y que imprima su tabla de multiplicar.

function multp($num) {
for ($i=1; $i<=12; $i++){
	echo "<br>$i x $num =".$i*$num;
    }
}

$num = rand(1,10);
echo "La tabla de multiplicar del numero: $num <br>";
multp ($num);
?>

</body>
</html>