<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Días de la semana switch">
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
            padding: 10px;
            display: inline-block;
        }
        img{
            width: 380px;
            height: 180px;
        }
    </style>
</head>
<body>
<h1>Resultado de Días de la semana con <span>Switch</span></h1>
<br>
<?php
$x = (rand(1,7));
switch ($x) {
case "1":
    echo "<img src='lunes.png' alt='Lunes'>";
    echo "<p>El día 1 corresponde a el: <span>Lunes</span></p>";
    break;
case "2":
    echo "<img src='martes.png' alt='Martes'>";
    echo "<p>El día 2 corresponde a el: <span>Martes</span></p>";
    break;
case "3":
    echo "<img src='miercoles.png' alt='Miércoles'>";
    echo "<p>El día 3 corresponde a el: <span>Miércoles</span></p>";
    break;
case "4":
    echo "<img src='jueves.png' alt='Jueves'>";
    echo "<p>El día 4 corresponde a el: <span>Jueves</span></p>";
    break;
case "5":
    echo "<img src='viernes.png' alt='Viernes'>";
    echo "<p>El día 5 corresponde a el: <span>Viernes</span></p>";
    break;
case "6":
    echo "<img src='sabado.png' alt='Sábado'>";
    echo "<p>El día 6 corresponde a el: <span>Sábado</span></p>";
    break;
case "7":
    echo "<img src='domingo.png' alt='Domingo'>";
    echo "<p>El día 7 corresponde a el:<span>Domingo</span></p>";
    break;
  default:
    echo "<p>¡No deberias ver esto!</p>";
}
?>

</body>
</html>
