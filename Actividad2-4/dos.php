<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Función tabla de multiplicar con inicio y fin">
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
<h1>Tabla de multiplicar número aleatorio: <span>function inicio y fin</span></h1>
<?php

// Escribe una función que reciba dos parámetros de entrada (inicio y fin) y que imprima las tablas de multiplicar entre esos dos números. 
//Utiliza la función del ejercicio anterior.

function tablas ($inicio,$fin){
	for ($i=$inicio;$i<=$fin;$i++){
    echo "<p>La tabla de multiplicar del numero $i :</p>";
    	multiplicar($i);
}
}
function multiplicar($num) {
for ($i=1; $i<=12; $i++){
	echo "<br>$i x $num =".$i*$num;
    }
}
do {
$inicio = rand (1,10);
$fin = rand (1,10);
}
while ($inicio > $fin);
tablas ($inicio, $fin);
?>

</body>
</html>
