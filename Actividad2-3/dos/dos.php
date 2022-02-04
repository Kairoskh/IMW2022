<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Valores de temperaturas, promedio, max y min">
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
<h1>Temperatura media, máxima y miníma con : <span>array</span></h1>
 <?php 

 /*Repetir el ejercicio 1
Calcular y mostrar el valor medio de los valores del array.
Calcular y mostrar el valor máximo de los valores del array.
Calcular y mostrar el valor mínimo de los valores del array.
*/

 $temperatura = array();
 $media = 0; //Variable del promedio
 $maximo = -5; //Variable del maximo
 $minimo = 50; //Variable del minimo

for($x = 0; $x < 10; $x++){

    $temperatura[$x]=rand(-5,50);
    $media += $temperatura[$x];

    //Incremento donde sumo todas las temperaturas

    echo "La temperatura del elemento $x es $temperatura[$x]<br>";

    if ($maximo < $temperatura[$x]){
        $maximo = $temperatura[$x]; //Actualizar valor de maximo
    }
    if ($minimo > $temperatura[$x]){
        $minimo = $temperatura[$x]; //Actualizar valor de minimo
    }

}
$media = $media / 10;
echo "<br> La <span>media</span> es $media<br>";
echo "<br> El valor <span>maximo</span> es $maximo<br>";
echo "<br> El valor <span>minimo</span> es $minimo<br>";


//Otra forma más de sacar el valor medio:
    
$suma = 0;
foreach ($temperatura as $valor){
$suma += $valor;
}
$total = count($temperatura);
//echo $promedio "<br>";
$promedio = $suma/$total;
echo "<br>La media es $promedio";

?>

</body>
</html>