<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 6</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info text-center">

<!--HOLA LEER ESTO PORFAVOR

El documento "seis_1.php" muestra los valores de las operaciones de los valores 1 y 2, 2 y 3, por otra parte también 
muestra los valores de las operaciones de los valores 1 y 3 pero con la peculariedad de que se usan ambos operadores y 
muestran resultados distintos segun el opeador que se le da en cada caso por ejemplo si el valor uno es =1 y el valor 3 es = 7,
si el primer operador es + y el segundo *, se mostrará los resultados de ambas operaciones tanto del más como del multiplo 
entonces seria Resultado 1= 1+3=4; y resultado 2= 1*7=7. Por lo demás hace los mismo que el documento "seis.php", 
es decir muestra los resultados de todos los valores y hace las operaciones entre los valores 1 y 2. EN RESUMEN EL DOCUMENTO "seis_1.php",
MOSTRARÁ RESULTADOS DE LOS VALORES 1 Y 2, 1 Y 3 (ESTE CON AMBOS OPERADORES SI ESTOS SON DISTINTOS MOSTRARÁ AMBAS OPERACIONES), 2 Y 3,
POR SUPUESTO TAMBIÉN ENTRE LOS VALORES 1, 2 Y 3 CON CUALQUIER OPERADOR QUE LE ASGIGNEMOS.

GRACIAS POR SU ATENCIÓN-->

<?php

// Definir variables y establecer valores vacios:

$valor1 = $valor2 = $valor3 = $operador= $operador1 = $resultado = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['enviar'])){
if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){

    //SOLO DOS OPERANDOS ENTRE VALOR 1 Y VALOR 2:
    if ($_POST["operador"] == "+") {
        echo "<br>El resultado de los valores uno y dos es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "-") {
        echo "<br>El resultado de los valores uno y dos es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "*") {
        echo "<br>El resultado de los valores uno y dos es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "/") {
        echo "<br>El resultado de los valores uno y dos es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
}
if ($_POST ["valor2"] !="" and $_POST ["valor3"]!=""){

    //SOLO DOS OPERANDOS ENTRE VALOR 2 Y VALOR 3:
    if ($_POST["operador1"] == "+") {
        echo "<br>El resultado de los valores dos y tres es: ";
        echo ($resultado = $_POST ["valor2"] + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor2"] ." + ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador1"] == "-") {
        echo "<br>El resultado de los valores dos y tres es: ";
        echo ($resultado = $_POST ["valor2"] - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor2"] ." - ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador1"] == "*") {
        echo "<br>El resultado de los valores dos y tres es: ";
        echo ($resultado = $_POST ["valor2"] * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor2"] ." * ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador1"] == "/") {
        echo "<br>El resultado de los valores dos y tres es: ";
        echo ($resultado = $_POST ["valor2"] / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor2"] ." / ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
}

if ($_POST ["valor1"] !="" and $_POST ["valor3"]!=""){

    //SOLO DOS OPERANDOS ENTRE VALOR 1 Y VALOR 3:

    //SE ESCOGEN AMBOS OPERADORES Y DAN DOS RESULTADOS SEGUN LOS ESCOGIDOS
    if ($_POST["operador"] == "+" or $_POST["operador1"] == "+") {
        echo "<br>El resultado de los valores uno y tres es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "-" or $_POST["operador1"] == "-") {
        echo "<br>El resultado de los valores uno y tres es: ";;
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "*" or $_POST["operador1"] == "*") {
        echo "<br>El resultado de los valores uno y tres es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    if ($_POST["operador"] == "/" or $_POST["operador1"] == "/") {
        echo "<br>El resultado de los valores uno y tres es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor3"] ." es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
}

    //TRES OPERANDOS:

    //OPERADORES IGUALES ENTRE LOS TRES OPERANDOS:

    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="" and $_POST ["valor3"]!=""){
    if ($_POST["operador"] == "+" and $_POST["operador1"] == "+") {
            echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"] + $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "-" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  - $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "*" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  * $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  / $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
            echo '<br><a href="seis_1.php">Regresar</a>';

}   // SUMA ENTRE OPERADOR == - , * Y /
    
    if ($_POST["operador"] == "+" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"] - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "+" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]  * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "+" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
}
    // SUMA ENTRE OPERADOR1 == * Y /

     if ($_POST["operador"] == "*" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
}
    // RESTA ENTRE OPERADOR == + Y * 

    if ($_POST["operador"] == "-" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"] + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "-" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } 

    // RESTA ENTRE OPERADOR1 == * Y /
    if ($_POST["operador"] == "*" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
    // MULTIPLICACION ENTRE OPERADOR == /

      if ($_POST["operador"] == "*" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }

     // Division ENTRE OPERADOR == *

     if ($_POST["operador"] == "/" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"] * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    } 
    // Division ENTRE OPERADOR1 == -

     if ($_POST["operador"] == "-" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis_1.php">Regresar</a>');
    }
}
}
else
{
?>  

<!--Escribe un script que simule una calculadora con dos operadores y tres operandos.-->

<h1>Calculadora:</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			Ingresa tu primer número:<br>
			<input type="number" name="valor1"><br><br>
            <select name="operador">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select><br><br>
			Ingresa tu segundo valor:<br>
			<input type="number" name="valor2"><br><br>
            <select name="operador1">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select><br><br>
            Ingresa tu tercer valor:<br>
			<input type="number" name="valor3"><br>
            <br>
			<input type="reset" value="Borrar">
			<input type="submit" name="enviar" value="Enviar">
		</form>

<?php
}
?>
</body>
</html>