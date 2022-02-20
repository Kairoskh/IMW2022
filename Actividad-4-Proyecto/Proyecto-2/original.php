<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Completa el emoji</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    table { 
      border-collapse: collapse;
      margin-left: auto; 
      margin-right: auto; 
    }
    td { 
      padding: 0; 
    }
    img { 
      vertical-align: bottom;
    }
    .img{
      width:220px;
      height: 80px; 
    }
  </style>
</head>

<body class="bg-light text-center">

<!--Inicio de "session"-->

<?php
session_name("completa-el-emoji");
session_start();

// Variables para maximos y minimos:

$valorMinimo = 0;
$valorMaximo = 7;

// Valores iniciales:

if (!isset($_SESSION["a"]) || !isset($_SESSION["b"]) || !isset($_SESSION["c"])) {
    $_SESSION["a"] = rand($valorMinimo, $valorMaximo);
    $_SESSION["b"] = rand($valorMinimo, $valorMaximo);
    $_SESSION["c"] = rand($valorMinimo, $valorMaximo);
}
?>

<!--Parte inicial del formulario-->

  <h1>Completa el emoji a continuación:</h1>
  <h5 class="text-danger">*Hay 8 emojis distintos.*</h5>
  <h5>!Buena suerte!</h5>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table>
      <tbody>
<?php

// Funciones a utilizar para recoger datos y buscar datos en la misma página:
//is_array: Comprueba si una variable es un array
//htmlspecialchars: Convierte todos los caracteres aplicables a entidades HTML.
// ENT_QUOTES: Convertirá tanto las comillas dobles como las simples.
//trim: Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena.
//array_walk_recursive: Aplicar una función de usuario recursivamente a cada miembro de un array.

function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $datos = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $datos = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $datos = $_REQUEST[$var];
        array_walk_recursive($datos, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $datos;
}

// Recoger datos:

$modificar = recoge("modificar");

// Renovar imagen que se solicita:

if ($modificar == 0) {
    $_SESSION["a"] = rand($valorMinimo, $valorMaximo);
} elseif ($modificar == 1) {
    $_SESSION["b"] = rand($valorMinimo, $valorMaximo);
} elseif ($modificar == 2) {
    $_SESSION["c"] = rand($valorMinimo, $valorMaximo);
}

// Generar formulario con imagenes para ir cambiando hasta completar:

echo "        <tr>";
echo "          <td><h2 class=\"d-flex\">Frente</h2></td>";
echo "          <td><img class=\"img\" src=\"img/images/imagen-$_SESSION[c]-1.png\" alt=\"Arriba\"></td>";
echo "          <td><button type=\"submit\" class=\"ms-3 btn btn-primary\" name=\"modificar\" value=\"2\">"
    . "<img src=\"img/refrescar.png\" height=\"20\" alt=\"Cambiar\"></button></td>";
echo "        </tr>";
echo "        <tr>";
echo "          <td><h2 class=\"d-flex\">Ojos</h2></td>";
echo "          <td><img class=\"img\" src=\"img/images/imagen-$_SESSION[b]-2.png\" alt=\"Mitad\"></td>\n";
echo "          <td><button type=\"submit\" class=\"ms-3 btn btn-primary\" name=\"modificar\" value=\"1\">"
    . "<img src=\"img/refrescar.png\" height=\"20\" alt=\"Cambiar\"></button></td>";
echo "        </tr>";
echo "        <tr>";
echo "          <td><h2 class=\"d-flex\">Boca</h2></td>";
echo "          <td><img class=\"img\" src=\"img/images/imagen-$_SESSION[a]-3.png\" alt=\"Abajo\"></td>\n";
echo "          <td><button type=\"submit\" class=\"ms-3 btn btn-primary\" name=\"modificar\" value=\"0\">"
    . "<img src=\"img/refrescar.png\" height=\"20\" alt=\"Cambiar\"></button></td>";
echo "        </tr>";

if (isset($_POST["enviar"])) { // Si se ha enviado el formulario:

  //Verificar si cada imagen pertenece al mismo emoji:

  if($_SESSION["a"] == 0 and $_SESSION["b"] == 0 and $_SESSION["c"] == 0){
  echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: ENAMORADO!</span></h1>";
  echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 1 and $_SESSION["b"] == 1 and $_SESSION["c"] == 1){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: SONROJADO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 2 and $_SESSION["b"] == 2 and $_SESSION["c"] == 2){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: SERIO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 3 and $_SESSION["b"] == 3 and $_SESSION["c"] == 3){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: SORPRENDIDO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 4 and $_SESSION["b"] == 4 and $_SESSION["c"] == 4){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: GUIÑANDO UN OJO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 5 and $_SESSION["b"] == 5 and $_SESSION["c"] == 5){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: SUPER SONROJADO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 6 and $_SESSION["b"] == 6 and $_SESSION["c"] == 6){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: PICARO!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  elseif($_SESSION["a"] == 7 and $_SESSION["b"] == 7 and $_SESSION["c"] == 7){
    echo "<h1><span class='badge bg-success'>¡Bien hecho! <br> ¡Has completado el emoji: PENSADOR!</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }

  //Si no se cumple informar de que no se cumple lo que se solicita:
    
  else{
    echo "<h1><span class='badge bg-danger'>¡No has completado ningún emoji! <br> Ve con cuidado algunos pueden confundir</span></h1>";
    echo "<a class='btn btn-primary text-white text-decoration-none mb-3' href='original.php'>Regresar</a>";
  }
  }

?>

      </tbody>
    </table>
    <button type="submit" class="btn btn-primary mt-3" name="enviar" value="jugar" >¡CONFIRMAR!</button>
  </form>

</body>
</html>