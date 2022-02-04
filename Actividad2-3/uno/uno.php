<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temperaturas">
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
<h1>Temperatura con : <span>array</span></h1>
 <?php 

/*Inicializar un array de 10 elementos, 
que simule las temperaturas de la isla de Fuerteventura, 
con valores aleatorios entre -5 y 50.
Una vez que ha inicializado el array, 
mostrar todos los valores que almacena.
*/

 $temperatura = array();
for($x = 0; $x < 10; $x++){

    $temperatura[$x]=rand(-5,50);

    echo "La temperatura del elemento $x es $temperatura[$x]<br>";
}

?>

</body>
</html>