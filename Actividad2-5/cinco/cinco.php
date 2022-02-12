<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 5</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    img {
      width: 125px;
      height: 125px;
    }
  </style>
</head>
<body class="bg-info text-center">
<?php

/* Escribe un script que mediante un formulario permita seleccionar el número de monedas que se desean lanzar (de 1 a 20)
y el tipo de moneda (Dólar Estadounidense, Euro, Yen japonés, Libra esterlina, Franco suizo). 
El comportamiento tiene que ser similar al de la web random.org.*/

// Definir variables y establecer valores vacios:

$numlanz = $tipo = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
function testdelanzamiento ($numlanz) {
    for ($i = 0; $i < $numlanz; $i++) {
      $lanzamiento= rand(0, 1);
      $tipo = test_input($_GET["tipo"]);
      if ($lanzamiento == 0) {
        echo "<image src='$tipo$lanzamiento.png' alt='Cara'>";
      } else {
        echo "<image src='$tipo$lanzamiento.png' alt='Cruz'>";
      }
    }
  }
if (isset($_GET['enviar']))
{   $tipo = test_input($_GET["tipo"]);
    $numlanz = test_input($_GET["numero"]);
    echo"<br>Has lanzado $numlanz monedas de tipo: $tipo <br>";
    testdelanzamiento($numlanz); 

    echo "<br><br><a class='btn btn-primary text-white text-decoration-none' href='cinco.php'>Regresar</a>";
}
else
{
?>  

<!--Escribe un script que muestre lanzamiento de monedas segun desee el usaurio de 1-20 de forma aleatoria-->

<div class="container mt-3">

    <h2> Escribe un script que mediante un formulario permita seleccionar el número de monedas que se desean lanzar (de 1 a 20) y el tipo de moneda (Dólar Estadounidense, Euro, Yen japonés, Libra esterlina, Franco suizo).</h2>
  
    <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
  
    <div class="row">
        <div class="col-xs-3 mb-3 mt-3">
        <label id="numero">Introduce un número de monedas a lanzar:</label>
                <br><br>
                <input type="number" min="1" max="20" class="form-control" name="numero" placeholder="Solo números del 1 al 20..." required>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Rellena este campo con un número del 1 al 20 para continuar.</div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 mb-3 mt-3">
        <label id="introducirn">Introduce el tipo de moneda que quieres lanzar:</label>
                <br><br>
                <select class="form-select" name="tipo">
                    <option value="dolar" selected>Dólar Estadounidense</option>
                    <option value="euro">Euro</option>
                    <option value="yen">Yen japonés</option>
                    <option value="libra">Libra esterlina</option>
                    <option value="franco">Franco suizo</option>
                </select>
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