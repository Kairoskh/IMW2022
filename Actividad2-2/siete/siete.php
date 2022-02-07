<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Uso de while">
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
            border-radius: 10px;
            padding: 5px;
        }
        img {
            width: 250px;
            height: 250px;
        }
        table {
            border-collapse: collapse;
            border: 5px solid red;
            display: inline-flex;
        }
        th, td {
            border: 5px solid red;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Ejercicion con el bucle: <span>while</span></h1>
<?php
echo "<h2>Mostrar los números múltiplos de 7 de 0 al 105 en dicha tabla:</h2>";
$numero = 0;
echo "<table><tr>";
while ($numero<=105){
  if ($numero%7==0){
    echo"<td>$numero</td>";
  }
  $numero++;
}
echo "</table></tr>";
echo "<br><br>";
echo "<h2>Mostrar los números de 770 a 77 de 77 en 77:</h2>";
echo "<table><tr>";
      $valor = 770;
      while ($valor>=77){
        echo"<td> $valor <br></td>";
       $valor=$valor-77;  
}
echo "</table></tr>";
echo "<br><br>";
echo "<h2>De un número aleatorio entre 1 y 1000, se va a sumar de 100 en 100 hasta llegar al 1500 o el más cercano a este:</h2>";
$x = rand(0,1000);
while($x <= 1500) {
  echo "El número es: $x <br>";
  $x+=100;
}
echo "<img src='1500.png' alt='1500'>";
?>
</body>
</html>
