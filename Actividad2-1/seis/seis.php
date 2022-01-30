<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba If/elseif/else">
    <meta name="keywords" content="diseño web, desarrollo web, seo,posicionamiento web">
    <meta name="author" content="Juan Félix">
    <link rel="icon" href="favicon.ico">
    <style>
        body{
            background-color: green;
            color: white;
            text-align: center;
        }
        span {
            color: white;
            background-color: black;
            border-radius: 15px;
            padding: 5px;
            display: inline-block;
        }
        img {
            height: 95px;
            width: 95px;
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>Resultado de las cartas con: <span>if / elseif / else</span></h1>
<h2>El resultado más cercano a 21 ganará:</h2>
<?php
/*Se trata de un juego de tiradas aleatoria de cartas, el jugador que alcance 21,
o este más cerca de 21 gana, puede haber empates y si alguno se pasa de 21 gana el otro jugador,
si ambos se pasan de 21 gana el jugador que este más cerca de 21*/
echo "<p>Jugador 1</p>";
$carta1 = (rand(1,13));
if ($carta1 == 1)
echo "<img src='cor1.png' alt='1 de corazones'>";
elseif ($carta1 ==2)
echo "<img src='cor2.png' alt='2 de corazones'>";
elseif ($carta1 ==3)
echo "<img src='cor3.png' alt='3 de corazones'>";
elseif ($carta1 ==4)
echo "<img src='cor4.png' alt='4 de corazones'>";
elseif ($carta1 ==5)
echo "<img src='cor5.png' alt='5 de corazones'>";
elseif ($carta1 ==6)
echo "<img src='cor6.png' alt='6 de corazones'>";
elseif ($carta1 ==7)
echo "<img src='cor7.png' alt='7 de corazones'>";
elseif ($carta1 ==8)
echo "<img src='cor8.png' alt='8 de corazones'>";
elseif ($carta1 ==9)
echo "<img src='cor9.png' alt='9 de corazones'>";
elseif ($carta1 ==10)
echo "<img src='cor10.png' alt='10 de corazones'>";
elseif ($carta1 ==11)
echo "<img src='cor11.png' alt='11 de corazones'>";
elseif ($carta1 ==12)
echo "<img src='cor12.png' alt='12 de corazones'>";
else
echo "<img src='cor13.png' alt='13 de corazones'>";
$carta2 = (rand(1,13));
if ($carta2 == 1)
echo "<img src='pi1.png' alt='1 de picas'>";
elseif ($carta2 ==2)
echo "<img src='pi2.png' alt='2 de picas'>";
elseif ($carta2 ==3)
echo "<img src='pi3.png' alt='3 de picas'>";
elseif ($carta2 ==4)
echo "<img src='pi4.png' alt='4 de picas'>";
elseif ($carta2 ==5)
echo "<img src='pi5.png' alt='5 de picas'>";
elseif ($carta2 ==6)
echo "<img src='pi6.png' alt='6 de picas'>";
elseif ($carta2 ==7)
echo "<img src='pi7.png' alt='7 de picas'>";
elseif ($carta2 ==8)
echo "<img src='pi8.png' alt='8 de picas'>";
elseif ($carta2 ==9)
echo "<img src='pi9.png' alt='9 de picas'>";
elseif ($carta2 ==10)
echo "<img src='pi10.png' alt='10 de picas'>";
elseif ($carta2 ==11)
echo "<img src='pi11.png' alt='11 de picas'>";
elseif ($carta2 ==12)
echo "<img src='pi12.png' alt='12 de picas'>";
else
echo "<img src='pi13.png' alt='13 de picas'>";
$jugador1 = $carta1 + $carta2;

echo "<p>Jugador 2</p>";
$carta3 = (rand(1,13));
if ($carta3 == 1)
echo "<img src='cor1.png' alt='1 de corazones'>";
elseif ($carta3 ==2)
echo "<img src='cor2.png' alt='2 de corazones'>";
elseif ($carta3 ==3)
echo "<img src='cor3.png' alt='3 de corazones'>";
elseif ($carta3 ==4)
echo "<img src='cor4.png' alt='4 de corazones'>";
elseif ($carta3 ==5)
echo "<img src='cor5.png' alt='5 de corazones'>";
elseif ($carta3 ==6)
echo "<img src='cor6.png' alt='6 de corazones'>";
elseif ($carta3 ==7)
echo "<img src='cor7.png' alt='7 de corazones'>";
elseif ($carta3 ==8)
echo "<img src='cor8.png' alt='8 de corazones'>";
elseif ($carta3 ==9)
echo "<img src='cor9.png' alt='9 de corazones'>";
elseif ($carta3 ==10)
echo "<img src='cor10.png' alt='10 de corazones'>";
elseif ($carta3 ==11)
echo "<img src='cor11.png' alt='11 de corazones'>";
elseif ($carta3 ==12)
echo "<img src='cor12.png' alt='12 de corazones'>";
else
echo "<img src='cor13.png' alt='13 de corazones'>";
$carta4 = (rand(1,13));
if ($carta4 == 1)
echo "<img src='pi1.png' alt='1 de picas'>";
elseif ($carta4 ==2)
echo "<img src='pi2.png' alt='2 de picas'>";
elseif ($carta4 ==3)
echo "<img src='pi3.png' alt='3 de picas'>";
elseif ($carta4 ==4)
echo "<img src='pi4.png' alt='4 de picas'>";
elseif ($carta4 ==5)
echo "<img src='pi5.png' alt='5 de picas'>";
elseif ($carta4 ==6)
echo "<img src='pi6.png' alt='6 de picas'>";
elseif ($carta4 ==7)
echo "<img src='pi7.png' alt='7 de picas'>";
elseif ($carta4 ==8)
echo "<img src='pi8.png' alt='8 de picas'>";
elseif ($carta4 ==9)
echo "<img src='pi9.png' alt='9 de picas'>";
elseif ($carta4 ==10)
echo "<img src='pi10.png' alt='10 de picas'>";
elseif ($carta4 ==11)
echo "<img src='pi11.png' alt='11 de picas'>";
elseif ($carta4 ==12)
echo "<img src='pi12.png' alt='12 de picas'>";
else
echo "<img src='pi13.png' alt='13 de picas'>";
echo "<br>";
$jugador2 = $carta3 + $carta4;
if ($jugador1 > 21){
    echo "Jugador 1 has perdido por pasarte de 21 ($jugador1)";
    echo "¡Gana el jugador 2 con: $jugador2 puntos!";
    echo "<br><br>";
    echo"Nota: si ambos se pasan ganara el que este más cerca de 21";
}
elseif ($jugador2 > 21){
    echo "Jugador 2 has perdido por pasarte de 21 ($jugador2)";
    echo "¡Gana el jugador 1 con: $jugador1 puntos!";
    echo "<br><br>";
    echo"Nota: si ambos se pasan ganara el que este más cerca de 21";
}
elseif ($jugador1 == 21){
    echo "<p><img src='trofeo.png' alt='Trofeo'><p>";
    echo "Felicidades Jugador 1 has ganado con 21 puntos exactos";
}
elseif ($jugador2 == 21){
    echo "<p><img src='trofeo.png' alt='Trofeo'><p>";
    echo "Felicidades Jugador 2 has ganado con 21 puntos exactos";
}
elseif ($jugador1 > $jugador2){
    echo "El jugador 1 ha ganado con: $jugador1 puntos";
}
elseif ($jugador1 == $jugador2){
    echo "Han empatado";
}
else {
    echo "El jugador 2 ha ganado con: $jugador2 puntos";
}

?>

</body>
</html>

