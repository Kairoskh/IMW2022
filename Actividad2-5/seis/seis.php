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

<!--HOLA LEER ESTO POR FAVOR

Este documento "seis.php" muestra los valores de las operaciones de los valores 1 y 2, y 
también muestra los valores de las operaciones de todos lo valores de forma correcta, 
pero solo si se realizan operaciones entre el valor 1 y 2 con su respectivo operador o operaciones de los valores 1, 2 y 3 
con ambos operadores, si se realiza una operación con el valor 1 y 3 o los valores 2 y 3 no mostrára nada. 
EN RESUMEN EL "seis.php" MOSTRARÁ RESULTADOS ENTRE EL VALOR 1 Y 2 CON SU RESPECTIVO OPERADOR Y TAMBIÉN MOSTRARÁ 
EL RESULTADO DE LAS OPERACIONES DE LOS TRES VALORES CON AMBOS OPERADORES.

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

    //SOLO DOS OPERANDOS:
    if ($_POST["operador"] == "+") {
        echo "<br>El resultado de los dos primeros valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }
    if ($_POST["operador"] == "-") {
        echo "<br>El resultado de los dos primeros valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }
    if ($_POST["operador"] == "*") {
        echo "<br>El resultado de los dos primeros valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }
    if ($_POST["operador"] == "/") {
        echo "<br>El resultado de los dos primeros valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }

    //TRES OPERANDOS:

    //OPERADORES IGUALES ENTRE LOS TRES OPERANDOS:

    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="" and $_POST ["valor3"]!=""){
    if ($_POST["operador"] == "+" and $_POST["operador1"] == "+") {
            echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"] + $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "-" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  - $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "*" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  * $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
            echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
            echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  / $_POST ["valor3"]);
            echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
            echo '<br><a href="seis.php">Regresar</a>';

}   // SUMA ENTRE OPERADOR == - , * Y /
    
    if ($_POST["operador"] == "+" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"] - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "+" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]  * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "+" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." + ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
}
    // SUMA ENTRE OPERADOR1 == * Y /

     if ($_POST["operador"] == "*" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
}
    // RESTA ENTRE OPERADOR == + Y * 

    if ($_POST["operador"] == "-" and $_POST["operador1"] == "+") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"] + $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." + ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "-" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } 

    // RESTA ENTRE OPERADOR1 == * Y /
    if ($_POST["operador"] == "*" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } if ($_POST["operador"] == "/" and $_POST["operador1"] == "-") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]  - $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." - ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }
    // MULTIPLICACION ENTRE OPERADOR == /

      if ($_POST["operador"] == "*" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." * ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }

     // Division ENTRE OPERADOR == *

     if ($_POST["operador"] == "/" and $_POST["operador1"] == "*") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"] * $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." / ". $_POST["valor2"] ." * ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    } 
    // Division ENTRE OPERADOR1 == -

     if ($_POST["operador"] == "-" and $_POST["operador1"] == "/") {
        echo "<br><br>El resultado de todos los valores es: ";
        echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]  / $_POST ["valor3"]);
        echo "<br> Dado que " . $_POST["valor1"] ." - ". $_POST["valor2"] ." / ". $_POST["valor3"]. " es = $resultado";
        echo ('<br><a href="seis.php">Regresar</a>');
    }
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