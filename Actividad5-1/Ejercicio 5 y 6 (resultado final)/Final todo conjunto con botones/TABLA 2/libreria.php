<?php

// Función para obtener el encabezado del documento HTML
function get_header(){
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Gestión de productos</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
<?php
}

// Función para obtener el pie del documento HTML
function get_footer(){
  ?>
    <footer>

    <!-- Indicar footer -->

    </footer>
</body>
</html>
<?php   
}


// Funcion para la validación de datos de entrada
function test_input($data) { 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function dbConnect(){
  $connect = mysqli_connect('localhost','root','majada','comercio');
  if (!$connect) {
    die("Conexión ha fallado: " . mysqli_connect_error());
  }
  else{
    return $connect;
  }
}
?>