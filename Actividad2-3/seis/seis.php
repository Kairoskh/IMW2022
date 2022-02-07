<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dados">
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
            height: 100px;
            width: 100px;
            padding: 10px;
        }
        h2 {
            color: orange;
        }
        p { font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Dados con : <span>for y foreach</span></h1>
 <?php

 /*
Escribe un script PHP que simule el juego de dados entre dos jugadores. 
Habrá que tirar una serie de dados al azar entre 2 y 10 e indique el resultado en cada tirada.
Los dados se comparan en orden (el primero con el primero, el segundo con el segundo, etc.) 
y gana el jugador que obtenga el número más alto en más ocasiones.
*/

$numero = rand(2, 10);

echo "<h2>Jugador 1</h2>";

// Guardamos los valores del Jugador 1 en la variable $dados1

$dados1 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados1[$i] = rand(1, 6);
}

// Mostramos los resultados obtenidos por el Jugador 1

echo "<p>";
foreach ($dados1 as $dado) {
    echo "<img src='$dado.png' alt='$dado'>";
}
echo "</p>";

echo "<h2>Jugador 2</h2>";

// Guardamos los valores del Jugador 2 en la variable $dados2

$dados2 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados2[$i] = rand(1, 6);
}

// Mostramos los resultados obtenidos por el Jugador 2

echo "<p>";
foreach ($dados2 as $dado) {
    echo "<img src='$dado.png' alt='$dado'>";
}
echo "</p>";

// En los acumuladores $jugador1 $jugador2 y $empate contamos cuántas partidas ha ganado cada uno

echo "<h2>Resultado:</h2>";

$jugador1 = 0;
$jugador2 = 0;
$empate = 0;
for ($i = 0; $i < $numero; $i++) {
    if ($dados1[$i] > $dados2[$i]) {
        $jugador1++;
    } elseif ($dados1[$i] < $dados2[$i]) {
        $jugador2++;
    } else {
        $empate++;
    }
}

// Mostramos cuántas partidas ha ganado cada uno

echo "  <p>El jugador 1 ha ganado <strong>$jugador1</strong> ve";
echo ($jugador1 != 1) ? "ces" : "z";//Si ha ganado una vez sera la "z" y si ha ganado varias veces sera "ces"
echo ", el jugador 2 ha ganado <strong>$jugador2</strong> ve";
echo ($jugador2 != 1) ? "ces" : "z";//Si ha ganado una vez sera la "z" y si ha ganado varias veces sera "ces"
echo " y los jugadores han empatado <strong>$empate</strong> ve";
echo ($empate != 1) ? "ces" : "z";//Si han empatado una vez sera la "z" y si han empatado varias veces sera "ces"
echo ".</p>";

// Mostramos quién ha ganado la partida

if ($jugador1 > $jugador2) {
    echo "  <p>En conjunto, ha ganado el jugador <strong>1</strong>.</p>\n";
} elseif ($jugador1 < $jugador2) {
    echo "  <p>En conjunto, ha ganado el jugador <strong>2</strong>.</p>\n";
} else {
    echo "  <p>En resumen, han empatado.</p>\n";
}

?>

</body>
</html>
