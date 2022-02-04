<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Array con edades y nombres">
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
<h1>Ordenar edades con: <span>foreach asor/arsort/ksort/krsort</span></h1>
 <?php

 /*
De forma ascendente ordenado por valor.
De forma ascendente ordenado por clave.
De forma descendente ordenado por valor.
De forma descendente ordenado por clave.
*/

$edad= array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

// De forma ascendente ordenado por valor.

echo "<h2>Ordenadas de forma ascendente por el valor con: <span>asort</span>.</h2>";
asort($edad);
foreach($edad as $x=>$x_valor)
   {
   echo "Clave = " . $x . ", Valor = " . $x_valor;
   echo "<br>";
   }

//De forma ascendente ordenado por clave.

echo "<h2>Ordenadas de forma ascendente por la clave con: <span>arsort</span>.</h2>";
echo "<br>";
arsort($edad);
foreach($edad as $i=>$i_valor)
   {
   echo "Clave = " . $i . ", Valor =" . $i_valor;
   echo "<br>";
   }

//De forma descendente ordenado por valor.

echo "<h2>Ordenadas de forma descendente por el valor con: <span>ksort</span>.</h2>";
echo "<br>";
ksort($edad);
foreach($edad as $e=>$e_valor)
   {
   echo "Clave = " . $e . ", Valor = " . $e_valor;
   echo "<br>";
   }

//De forma descendente ordenado por clave

echo "<h2>Ordenadas de forma descendente por la clave con: <span>krsort</span>.</h2>";
echo "<br>";
krsort($edad);
foreach($edad as $k=>$k_valor)
   {
   echo "Clave = " . $k . ", Valor = " . $k_valor;
   echo "<br>";
   }
?>

</body>
</html>