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

$sql = "SELECT id, nombre, fabricacion, fecha_salida, numero, marca, precio, categoria FROM productos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. "- Fabriación: " . $row["fabricacion"]. " - Fecha de salida: ". $row["fecha_salida"]. " - Número: ". $row["numero"]. " - Marca: ". $row["marca"]." - Precio: ". $row["precio"]." - Categoria: ". $row["categoria"]."<br><br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>