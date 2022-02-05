<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Imprimir array con tabla">
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
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        table, th, td {
            border: 4px solid greenyellow;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Imprimir datos de un array en una tabla con dos columnas con posición y valor: <span>function imprimir_array</span></h1>
<?php
/*5. Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada 
y muestre su contenido en una tabla con dos columnas. 
La primera columna mostrará la posición del array y la segunda el valor que hay en esa posición.*/

function imprimir_array($valores){
    foreach($valores as $posicion=>$valor)
   {
    echo "<table><thead><tr>";
    echo "<th>Posición del array</th>";
    echo "<th>Valor que contiene</th>";
    echo "</thead></tr><tbody><tr>";
    echo "<td> $posicion </td>";
    echo "<td>$valor </td>";
    echo "</tr></tbody></table>";
   }
}
imprimir_array([0, 7, 14, 21, 28]);
?>

</body>
</html>
