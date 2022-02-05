<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 6-1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Llamada a funciones.php">
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
<?php
    include('funciones.php');
?>
<h1>PROBANDO FUNCIONES DE LOS EJERCICIOS 1 al 5 CONPHP.</h1>
<p>PRUEBA DE USO DE FUNCIONES INCRUSTADAS EN EL DOCUMENTO "funciones.php" A continuación:</p>

<!--Crea un archivo llamado funciones.php que contenga todas las funciones creadas en los ejercicios anteriores. 
Escribe un script PHP que incluya el archivo funciones.php y que haga uso de cada una de ellas.-->

<?php
    
        echo "<h2>Ejercicio 1. Tabla de multiplicar:</h2>";
        $num = rand(1,10);
        echo "La tabla de multiplicar del número: " . $num;
        echo "<br>";
        multp($num);

        echo "<h2>Ejercicio 2. Tabla de multiplicar con inicio y fin:</h2>";
        tablas(6,7);

        echo "<h2>Ejercicio 3. Sacar números enteros entre un máximo y minímo:</h2>";
        var_dump(inicializar_array(13,9,1));

        echo "<h2>Ejercicio 4. Calcular media de valores insertados en el array:</h2>";
        echo calcular_media([76,14,6]);

        echo "<h2>Ejercicio 5. Imprimir array con dos columnas una de posición del array y otra del valor del mismo:</h2>";
        imprimir_array([1, 2, 5, 9, 10]);
    ?>

</body>
</html>
