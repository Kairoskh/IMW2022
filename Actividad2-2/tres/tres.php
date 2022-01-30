<!DOCTYPE html>
<html>
    <head>
    <title>Ejercicio 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Números pares do, while">
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
                background-color: green;
                border-radius: 15px;
                padding: 5px;
                display: inline-block;
            }
            table {
                border-collapse: collapse;
                border: 1px solid green;
                display: inline-flex;
            }
            th, td {
                border: 5px solid green;
                padding: 5px;
            }
            p {
                font-size: 25px;
            }
        </style>
    </head>
<body>
<h1>Mostrar números pares entre 10 y 50 con el bucle: <span>do-while</span></h1>
<?php
echo "<h1>Números pares entre 10 y 50:</h1>";
$x = 8;
echo "<table><tr>";
do {$x++;
    if ($x % 2 == 0){
    echo "<td> <p>$x</p> </td>";
    } 
}
while ($x <= 50);  
echo "</tr></table>";
?>
</body>
</html>
