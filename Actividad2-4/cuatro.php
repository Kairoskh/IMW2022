<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Media de valores de array">
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
            padding: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>Sacar la media de los valores del array: <span>function calcular_media</span></h1>
<?php

/*Escribe una función llamada calcular_media que reciba un array como parámetro de entrada
y que devuelva la media de todos los valores que contiene.
*/

$valores= array(12,34,56,4,3,2,1,8,9,10,77,89,121,458,13);//Array a utilizar.
function calcular_media($valores){
    $media = 0; //Variable de la media
    for($x = 0; $x < 15; $x++){

        $media += $valores[$x];
     }
     $media = $media / 15;
     return "<br> La <span>media</span> del array \$valores es: $media<br>";
}
echo calcular_media($valores);
?>

</body>
</html>
