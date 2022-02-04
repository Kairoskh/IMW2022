<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Array asociativo coches">
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
            height: 220px;
            width: 520px;
        }
        h2 {
            color: blue;
        }
    </style>
</head>
<body>
<h1>Ejercicio array asosiativo: <span>array asosiativo</span></h1>
 <?php

//Propón un script PHP que use arrays asociativos. Debe ser original.

//Edades:

echo "<h2>Edades:</h2>";
$edad = array("Juan"=>"35", "Billy"=>"37", "Julia"=>"43", "Jose"=>"24", "Ana"=>"42", "Juliana"=>"21", "Miguel"=>"18", "Beca"=>"21", "Evelyn"=>"22", "María"=>"39");
echo "Hay unas " . count($edad) . ' personas aquí.<br>';
foreach($edad as $nombres=>$edades) {
    echo '<br/> La edad de ' .$nombres . ' es de ' . $edades .' años. ';
    }

//Restaurante:

echo "<h2>Pedir ensalada en un restaurante:</h2>";
$ensalada = array('lechuga' => 'Con', 'tomate' => 'Sin', 'cebollas' => 'Sin', 'apio' => 'Con', 'zanahorias' => 'Con', 'pepinillos' => 'Sin', 'aguacate' => 'Con', 'rúcula' => 'Sin');

echo '<br>Quiero mi ensalada:<br><br>';

//Recorrer el array:

foreach ($ensalada as $ingrediente=>$incluir) {
echo $incluir . ' ' . $ingrediente . '<br>';
}

//Coches y su potencia en Cv (CABALLOS DE VAPOR):

echo "<h2>Coches más potentes:</h2>";
$coches = array('Lotus Evija'=>'2.000 CV', 'Aspark Owl'=>'1.985 CV', 'Rimac C_Two'=>'1.914 CV', 'Elation Freedom'=>'1.903 CV', 'Pininfarina Battista'=>'1.900 CV', 'Bugatti Bolide'=>'1.825 CV', 'Hennessey Venom F5'=>'1.817 CV', 'Vanda Dendrobium'=>'1.800 CV', 'Corbellati Missile'=>'1.800 CV', 'SSC Tuatara'=>'1.750 CV');
echo "Hay unos " . count($coches) . " coches en esta lista.<br>";

//Recorrer el array:

foreach($coches as $coche=>$cv) {
echo '<br> El ' .$coche . ' posee: ' . $cv .' en total. <br>' ;
if ($coche == 'Lotus Evija' ){
    echo "<br><img src='Lotus Evija.png' alt='Lotus Evija'><br>";
}
elseif ($coche == 'Aspark Owl' ){
    echo "<br><img src='Aspark Owl.png' alt='Aspark Owl'><br>";
}
elseif ($coche == 'Rimac C_Two' ){
    echo "<br><img src='Rimac C_Two.png' alt='Rimac C_Two'><br>";
}
elseif ($coche == 'Elation Freedom' ){
    echo "<br><img src='Elation Freedom.png' alt='Elation Freedom'><br>";
}
elseif ($coche == 'Pininfarina Battista' ){
    echo "<br><img src='Pininfarina Battista.png' alt='Pininfarina Battista'><br>";
}
elseif ($coche == 'Bugatti Bolide' ){
    echo "<br><img src='Bugatti Bolide.png' alt='Bugatti Bolide'><br>";
}
elseif ($coche == 'Hennessey Venom F5' ){
    echo "<br><img src='Hennessey Venom F5.png' alt='Hennessey Venom F5'><br>";
}
elseif ($coche == 'Vanda Dendrobium' ){
    echo "<br><img src='Vanda Dendrobium.png' alt='Vanda Dendrobium'><br>";
}
elseif ($coche == 'Corbellati Missile' ){
    echo "<br><img src='Corbellati Missile.png' alt='Corbellati Missile'><br>";
}
else {
    echo "<br><img src='SSC Tuatara.png' alt='SSC Tuatara'><br>";
}
}
?>

</body>
</html>