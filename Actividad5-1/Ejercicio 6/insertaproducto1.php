<?php
$servername = "localhost";
$username = "root";
$password = "majada";
$dbname = "COMERCIO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO proveedores (empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria) VALUES
('LA COMICSERIA','C/ Almirante Perez, #33, 35600','2016-02-12','928547325','Las Palmas','1234','TODAS')";

if (mysqli_query($conn, $sql)) {
  echo "¡Nuevo registro creado correctamente!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
