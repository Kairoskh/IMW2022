<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Piedra papel y tijeras">
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
        img {
            height: 150px;
            width: 150px;
        }
        table {
            width: 100%;
            text-align:center;
            border: 1px;
        } 
        h2 {
            color: red;
        }
        p { font-size: 25px;}

    </style>
</head>
<body>
<h1>Piedra, papel y tijeras con el bucle: <span>for</span></h1>
 <?php 
//Variables y array a utilizar
$cuentaj1 = 0;
$cuentaj2 = 0;
$jugador1 = '';
$jugador2 = '';
$jugada = array("rock","paper","scissors");
//Creación de tabla
echo "<table>";
echo "<th><p>Resultados del jugador 1:</p></th>";
echo "<th><p>Resultados del jugador 2:</p></th>";
//Titulos y puntuaciones
echo "<h2>PIEDRA, PAPEL, ... ¡TIJERAS!</h2>";
echo "<h2><span>Puntuación:</span></h2>";
//Acondicionar el array para elejirlo de manera aleatoria.
    while($cuentaj1 <2 && $cuentaj2 <2){
        shuffle($jugada); 
            $jugador1 = $jugada[rand(0,2)];
        shuffle($jugada);
            $jugador2 = $jugada[rand(0,2)];
        echo "<tr>";
//Mostar imagen de la tirada del jugador 1.
    if ($jugador1== "rock") {
        echo "<td> Jugador 1 ha sacado: <br><img src='rock.png' alt='Piedra'></td>";
    }
    elseif ($jugador1 == "paper"){
        echo "<td> Jugador 1 ha sacado: <br><img src='paper.png' alt='Papel'></td>";
    }
    else {
        echo "<td> Jugador 1 ha sacado: <br> <img src='scissors.png' alt=Tijeras'></td>"; 
    }
//Mostar imagen de la tirada del jugador 2.
    if ($jugador2 == "rock") {
        echo "<td> Jugador 2 ha sacado: <br><img src='rock.png' alt='Piedra'></td>";
    }
    elseif ($jugador2 == "paper"){
        echo "<td> Jugador 2 ha sacado: <br><img src='paper.png' alt='Papel'></td>";
    }
    else {
    echo "<td> Jugador 2 ha sacado: <br> <img src='scissors.png' alt=Tijeras'></td>"; 
    }
    echo "</tr>";
//Jugadas a realizar
    if ($jugador1 == "paper" && $jugador2 == "rock" || $jugador1 == "scissors" && $jugador2 == "paper" || $jugador1 == "rock" && $jugador2 == "scissors"){
        echo "Ha ganado el jugador 1. OBTIENES + 1 PUNTO.<br>";
        $cuentaj1++;
    }
    if ($jugador2 == "paper" && $jugador1 == "rock" || $jugador2 == "scissors" && $jugador1 == "paper" || $jugador2 == "rock" && $jugador1 == "scissors"){
        echo "Ha ganado el jugador 2. OBTIENES + 1 PUNTO <br>";
        $cuentaj2++;
    }
    if ($jugador2 == "paper" && $jugador1 == "paper" || $jugador2 == "scissors" && $jugador1 == "scissors" || $jugador2 == "rock" && $jugador1 == "rock"){
        echo "Han empatado.<br>";
    }
//Suma de puntos y resultado final.
    if($cuentaj1 == 2){
        echo "<h2> <img src='trofeo.png' alt='Trofeo'> <br> ¡FELICIDADES! <br> ¡El jugador 1 ha ganado!</h2>";
    }
    elseif($cuentaj2 == 2){
        echo "<h2> <img src='trofeo.png' alt='Trofeo'> <br> ¡FELICIDADES! <br> ¡El jugador 2 ha ganado! </h2>";
    }
    }
        echo "</table>"; 
?>

</body>
</html>
