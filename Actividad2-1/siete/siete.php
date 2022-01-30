<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba Switch edades aleatorias">
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
            padding: 5px;
            display: inline-block;
        }
        img {
            height: 320px;
            width: 380px;
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Edad aleatoria prueba con <span>Switch</span></h1>
<h2>Según el resultado se dira si se es apto para trabajar, votar, entre otras:</h2>
<?php
$valor = rand(1, 99);
switch ($valor) {
    case $valor <= 15:
        echo "Tu edad es: $valor eres un niño";
        echo "<br><br>";
        echo "<p><img src='menor15.png' alt='Menor de 15'></p>";
        echo "<span>Aún no eres apto para trabajar ni votar, deberias estar estudiando. ¡Ánimo!</span>";
        break;
    case $valor == 16 && $valor == 17:
        echo "Tu edad es: $valor eres un adolescente";
        echo "<br><br>";
        echo "<p><img src='adolescente.png' alt='Adolescente'></p>";   
        echo "<span>Eres apto para trabajar con el permiso de tus padres, es recomendable que estes estudiando o puedes trabajar y estudiar a la vez, pero no puedes votar. ¡Ánimo!</span>";
        break;
    case $valor >= 18 && $valor <= 26:
        echo "Tu edad es: $valor eres un adulto joven";
        echo "<br><br>";
        echo "<p><img src='adultojoven.png' alt='Adulto joven'></p>";   
        echo "<span>Ya eres apto para trabajar y votar, tambíen puedes seguir estudiando y formarte. O trabajar y estudiar también. ¡Ánimo!</span>";
        break;
    case $valor >=27 && $valor <= 30:
        echo "Tu edad es: $valor eres un adulto";
        echo "<br><br>";
        echo "<p><img src='adulto.png' alt='Adulto'></p>";  
        echo "<span>Ya eres apto para trabajar y votar. Con suerte ya habrás terminado la carrera que elegiste. Sal a comerte el mundo. ¡Ánimo!</span>";
        break;
    case $valor >=31 && $valor <= 64:
        echo "Tu edad es: $valor eres un adulto mayor";
        echo "<br><br>";
        echo "<p><img src='adultomayor.png' alt='Adulto Mayor'></p>";  
        echo "<span>Ya eres apto para trabajar y votar. Seguro que estas trabajando. Sal a comerte el mundo y disfruta. ¡Ánimo!</span>";
        break;       
    case $valor >= 65:
        echo "Tu edad es: $valor eres un adulto con mucha experiencia";
        echo "<br><br>";
        echo "<p><img src='adultoanciano.png' alt='Adulto muy mayor'></p>";    
        echo "<span>Ya estas más mayor. Es tiempo de jubilarte y disfrutar de tu tiempo libre. Pero puedes votar y seguir trabajando si quieres. ¡Ánimo!</span>";
        break;
}
?>

</body>
</html>
