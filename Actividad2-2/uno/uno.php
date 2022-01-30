<!DOCTYPE html>
<html lang="es">
    <head>
    <title>Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba php tablas">
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
            border-radius: 50px;
            padding: 5px;
            display: inline-block;
          }
          table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 5px solid green;
          }
          th, td {
            padding: 15px;
            border: 5px solid green;
          }
        </style>
    </head>
<body>
<h1>Tabla de 1 a 10 con el bucle:<span>For</span></h1>
<?php
echo "<table><tr>";
for ($x=1;$x<=10;$x++)
{
echo "<td> $x </td>";
}
echo "</tr></table>";
?>
</body>
</html>
