<!DOCTYPE html>
<html>
    <head>
    <title>Ejercicio 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba php tablas de multiplicar">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
    <link rel="icon" href="favicon.ico">
        <style>
            body {
                text-align: center;
                background-color: black;
                color: white;
            }
            span {
                color: white;
                background-color: red;
                border-radius: 15px;
                padding: 5px;
                display: inline-block;
            }
            table {
                border-collapse: collapse;
                border: 5px solid red;
                display: inline-flex;
            }
            th, td {
                border: 5px solid red;
                padding: 10px;
            }
        </style>
    </head>
<body>
<h1>Tabla de multiplicar número aleatorio entre 1 y 100 con bucle: <span>while</span></h1>
<?php
echo "<table>";
$x = rand(1,100);
$i = 0;
echo "<h1>Tabla de multiplicar del $x:</h1>";

    while ($i <= 12) {
    echo "<tr>";
    echo "<td>". $x . " X " . $i ." = </td>";
    echo "<td>" . $x * $i ."</td>";
    echo "</tr>";
    $i++;
}
echo "</table>";
?>
</body>
</html>
