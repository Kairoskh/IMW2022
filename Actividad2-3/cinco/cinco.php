<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Paises y capitales">
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
        h2 {
            color: orange;
        }
    </style>
</head>
<body>
<h1>Ordenar capitales con: <span>array y function</span></h1>
 <?php

 /*
Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. 
El resultado deberá seguir el siguiente patrón:
La capital de ITALIA es ROMA
Ten en cuenta que tendrás que utilizar una función para convertir las claves y los valores del array en mayúscula.
*/

echo "<h2>Listed in ascending form by the key, with: <span>ksort</span> and <span>strtoupper</span> function.</h2>";
$pais = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

//De forma ascendente ordenado por la clave.

echo "<br>";
ksort($pais);
foreach($pais as $clave=>$clave_valor)
   {
    
    //Función para pasar a mayúsculas

    $paises = strtoupper($clave);
    $capital = strtoupper($clave_valor);
   echo "The capital of " . $paises . " is " . $capital.".";
   echo "<br>";
   }

?>

</body>
</html>


