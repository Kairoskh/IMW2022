<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 4</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info text-center">
<?php

/*Escribe un script que muestre un formulario que permita introducir un número y mostrar su tabla de multiplicar.*/

// Definir variables y establecer valores vacios:

$num = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
function multp($num) {
    for ($i=1; $i<=12; $i++){
        echo "<br>$i x $num =".$i*$num;
        }
    }
if (isset($_GET['enviar']))
{
    $num = test_input($_GET["numero"]);
    echo "<h1>Tabla de multiplicar del número : $num </h1>";
    multp ($num);

    echo "<br><br><a class='btn btn-primary text-white text-decoration-none' href='cuatro.php'>Regresar</a>";

}
else
{
?>  

<!--Escribe un script que muestre un formulario que permita introducir un número y mostrar su tabla de multiplicar.-->

<div class="container mt-3">

    <h2>Tabla de multiplicar</h2>
  
    <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
  
    <div class="row">
        <div class="col-xs-3 mb-3 mt-3">
                <label id="numero">Introduce un numero:</label>
                <br>
                <input type="number" class="form-control" name="numero" placeholder="Solo números..." required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Rellena este campo con un NÚMERO para continuar.</div>
        </div>
    </div>
  
      <button type="submit" class="btn btn-primary mb-5" name="enviar">Enviar datos</button>
    </form>
</div>

<?php
}
?>
</body>
</html>