<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Array indexados motos">
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
        img {
            height: 140px;
            width: 140px;
        }
        .img {
            height: 280px;
            width: 320px;
        }
        p { font-size: 25px;
        }
        h2 {
            color: blue;
        }
    </style>
</head>
<body>
<h1>Ejercicio array indexado: <span>array indexado</span></h1>
 <?php

//Propón un script PHP que use arrays indexados. Debe ser original.

//En las líneas siguientes el array mostrará la elección 1 contenida dentro del mismo:

$motos = array("Kawasaki ninja 650-2021","Ducati Monster-2021","Harley Davidson Road Glide Special 2021","BMW M 1000 RR 2021","Yamaha MT 125 2021", "Honda CB300R");
    echo "<h2>Mi moto favorita es la: $motos[1]</h2>";

//En las líneas siguientes el array mostrará los demás valores contenidos dentro del mismo:

    echo "<h3>Pero eso no quiere decir que las motos: <br>$motos[0],<br> $motos[2],<br> $motos[3],<br> $motos[4]<br> y $motos[5]. <br>No sean muy buenas opciones también </h3>";
    echo "<br>";

//En las lineas siguiente el array mostrará una imagen por cada valor indexado del array, con un rango iniciando desde el 5 al 0:

$motos = range(5,0);
    foreach ($motos as $medios1_1) {
        echo "<img src='$medios1_1.png' alt='$medios1_1'>";
    }
    echo "<br>";

//Ahora se hará un conteo de los componentes del array:

 $numeros=count($motos);
 echo "<br>";
 echo "<h3>El array: \$motos tiene $numeros elementos.</h3>";

//Ordenar los datos de array de forma descendente ordenado por la clave.

echo "<h2>Ordenadas de forma descendente por la clave por defecto con: <span>krsort</span>.</h2>";
echo "<br>";
krsort($motos);
foreach($motos as $p=>$p_valor)
   {
   echo "Clave = " . $p . "";
   echo "<br>";
   echo "<img class='img' src='$p.png' alt='$p'>";
   echo "<br>";
   }

//Ordenar los datos de array de forma ordenado por la clave.

echo "<h2>Ordenadas de forma ascendente por la clave por defecto con: <span>arsort</span>.</h2>";
echo "<br>";
arsort($motos);
foreach($motos as $x=>$x_valor)
   {
   echo "Clave = " . $x . "";
   echo "<br>";
   echo "<img class='img' src='$x.png' alt='$x'>";
   echo "<br>";
   }
?>

</body>
</html>