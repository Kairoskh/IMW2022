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
  <link rel="icon" href="images/favicon.ico">
  <link href="estilo.css" rel="stylesheet">
  
</head>
<body class="bg-info">
<?php
}
// Funcióm para obtener la barra de navegación HTML
function get_navbar(){
  ?>
<!-- Navegador -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black mb-3">
  
    <div class="container-fluid">
      <a class="navbar-brand text-black" href="listavista.php">
         <span class="badge me-3 p-2 bg-white text-black">Base de datos comercio</span>
      </a>
      <button class="navbar-toggler bg-info border-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="listavista.php">Listado de productos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="listavistaproveedor.php">Listado de proveedores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Añadir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="insertarproducto.php">Añadir productos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="insertarproveedor.php">Añadir proveedores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="busquedaproducto.php">Buscar productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="busquedaproveedor.php">Buscar proveedores</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
}

// Función para obtener el pie del documento HTML
function get_footer(){
  ?>
    <footer class="bg-dark text-center text-white mt-5">
  <div class="container p-4 pb-0">
   <p>Base de datos Comercio (productos y proveedores).</p>
  </div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Juan Félix Jiménez Heredia IMW ASIR 2º
  </div>
  <!-- Copyright -->
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
// Función para realizar la subida de la imagen al servidor. 
// Es necesario en htdocs crear una carpeta llamada images/
function subefoto()
{
$dir = "images/";//Carpeta donde se guardara la imagen o archivo
$fichero = $dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1; //Subida con éxito
$imageFileType = strtolower(pathinfo($fichero,PATHINFO_EXTENSION));//Verificar si es una extensión permitida y pasar a minúsculas

// Comprueba el tamaño de la imagen
if ($_FILES["foto"]["size"] > 1000000) {
  echo "Lo siento, La foto ocupa más de 1MB";
  $uploadOk = 0; //Subida fallida
}
// Comprueba los formatos
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Lo siento, los formatos permitidos son JPG, JPEG, PNG y GIF ";
  $uploadOk = 0; //Subida fallida
}

// Comprueba si ha habido error
if ($uploadOk == 0) {
  echo "Tu foto no se ha subido con éxito"; //Subida fallida
// Si está correcto
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $fichero)) {//Si sube la foto correctamente
    return $fichero;
  } else {
    return "";
  }
}
}
?>