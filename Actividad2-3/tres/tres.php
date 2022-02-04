<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Listado de temperaturas">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
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
<h1>Temperatura con : <span>array, rsort y asort</span></h1>
 <?php

 /*
Repetir el ejercicio 1.
Mostrar el listado ordenado de mayor a menor.
Mostrar el listado ordenado de menor a mayor.
*/

echo "<h2>Temperaturas aleatorias rango normal de -5 a 50</h2>";
 $temperatura = array();

for($x = 0; $x < 10; $x++){

    $temperatura[$x]=rand(-5,50);

    echo "La temperatura del elemento $x es $temperatura[$x]<br>";

}
echo "<h2>Temperaturas aleatorias ordenadas de mayor número a menor con: <span>rsort</span></h2>";

//Mayor a menor

rsort($temperatura);

$mayor = count($temperatura);
for($a = 0; $a < $mayor; $a++) {
  echo "<br> La temperatura del elemento $a es $temperatura[$a]";
}

echo "<h2>Temperaturas aleatorias ordenadas de menor número a mayor con: <span>sort</span></h2>";

//Menor a mayor

sort($temperatura);

$menor = count($temperatura);
for($i = 0; $i < $menor; $i++) {
  echo "<br> La temperatura del elemento $i es $temperatura[$i]";
}

?>

</body>
</html>