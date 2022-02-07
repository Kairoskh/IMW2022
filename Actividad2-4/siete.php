<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Función original">
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
        h2 {
          color: orange;
        }
        img {
          height: 220px;
          width: 320px;
        }
        p { font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Función original: <span>function</span></h1>
<?php

//Realiza un script de PHP que haga uso de funciones. Debe ser original

echo "<h2>Método que indica el tipo de medalla que gana el atleta segun un número aleatorio.</h2>";

// Método que indica el tipo de medalla que gana el atleta segun un número aleatorio.

function tipoDeMedalla(int $posicion): ?string
{
    switch ($posicion) {
        case 1:
            return "<img src='oro.png' alt='Oro'> <br> El atleta ha ganado en la primera se le otorgara la medalla de: Oro ";
            
        case 2:
            return "<img src='plata.png' alt='Plata'> <br> El atleta ha ganado en la segunda posicion se le otorgara la medalla de: Plata";
     
        case 3:
            return "<img src='bronce.png' alt='Bronce'> <br> El atleta ha ganado en la tercera posicion se le otorgara la medalla de: Bronce'";

        default:
            return "<img src='descalificado.png' alt='Descalificado'> <br>El atleta ha sido descalificado, no se le otorgará ninguna medalla";
    }
}

echo tipoDeMedalla(rand(0,4));//Aleatorio

//La siguiente función escoge un número aleatorio y a partir de ese número empieza a sumar hasta 35.

echo "<h2>Escoge un número aleatorio (entre 0-10) y a partir de ese número empieza a sumar hasta 35.</h2>";
function suma($num)
{
    if ($num <= 35) {
        echo "$num  ";
        suma($num + 1);
    }
}
$num= rand(0,10);
echo suma($num);

echo "<br><br>";
echo "<h2>Cortar un texto de 30 letras y añadir puntos suspensivos al final.</h2>";

//Corta un texto a 30 letras y añade puntos suspensivos al final.

function resumen(string $texto): string
{
    return substr($texto, 0, 30) ." ... ";
}

echo resumen("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
echo resumen("<br><br>");
echo resumen("Lorem Ipsum has been the industrys standard dummy text ever since the 1500.");

?>

</body>
</html>
