<?php

// Función para obtener el encabezado del documento HTML
function get_header(){
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Gestión de proveedores</title>
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