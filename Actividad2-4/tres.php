<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Números enteros">
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
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        table, th, td {
            border: 4px solid greenyellow;
            padding: 10px;
        }
        .entero {
            background-color: forestgreen;
        }
        .noentero {
            background-color: red;
        }
        h2 {
            color: orange;
        }
    </style>
</head>
<body>
<h1>Escribe una función llamada inicializar_array: <span>function</span></h1>
<?php

/*
Escribe una función llamada inicializar_array que reciba
tres parémetros llamados numero_de_elementos, min y max, 
y que devuelva un array de números enteros comprendidos
entre los valores min y max. 
El número de elementos que contiene el array será el
especificado en el parámetro de entrada numero_de_elementos
*/

//Ejercicio principal:

function inicializar_array ($numero_de_elementos, $max, $min){
    $array = [];
    for($a = 0; $a <$numero_de_elementos; $a++){

        $array[$a] = rand($min,$max); 
    }
    return $array;
}
var_dump(inicializar_array(14,7,3));

//Otra manera distinta de hacer el ejercicio con tablas y posiciones:

echo "<h2>Otra forma de realizar el ejercicio</h2>";
$numero_de_elementos = array(10.9, 7, 1.2, -10, 77, 99, 2.1, 4.5, 12, 9.7);
$min = -10;
$max = 99;

function inicializar_array2 ($numero_de_elementos, $min, $max){

//Información de la función
   /* $conteo =count($numero_de_elementos);
    echo "Números enteros entre $min <br> y $max<br>";
    echo "El valor máximo es: " . max($numero_de_elementos) ."<br>";
    echo "El valor mínimo es: " . min($numero_de_elementos) ."<br>";
    echo "Cuenta de valores en el array ". count($numero_de_elementos) . "<br>";
    for ($i = 0; $i < $conteo; ++$i){
        echo $numero_de_elementos[$i]."<br>";
    }*/
    echo "Números enteros entre $min <br> y $max<br><br>";
//Tabla especificando los números enteros y los que no, dentro del array y máximos y minímos dentro de el mismo.

    foreach($numero_de_elementos as $x=>$x_valor)
   {echo "<table><tr>";
    echo "<th>Posicion = $x ". "(" .$x_valor. ")"."</th></tr>";
    is_int($x_valor);
    if (is_int($x_valor)==1){
        echo "<tr><td><span class='entero'>Es entero</span> dado que su valor en base 10 es de: " . is_int($x_valor)."</td></tr>";
    }
    else {
        echo "<tr><td><span class='noentero'>No es entero</span> dado que su valor en base 10 es: 0 </td></tr>";
    }
    echo "</tr><table>";
   }
  
}
    echo inicializar_array2($numero_de_elementos, $min, $max);

    
?>

</body>
</html>
