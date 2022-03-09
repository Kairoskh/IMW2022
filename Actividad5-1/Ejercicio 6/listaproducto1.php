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

$sql = "SELECT id, empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria FROM proveedores";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Empresa: " . $row["empresa"]. "- Direccion: " . $row["direccion"]. " - Envios recientes: ". $row["envios_recientes"]. " - Teléfono: ". $row["telefono"]. " - Provincia: ". $row["provincia"]." - Unidades Vendidas: ". $row["unidades_vendidas"]." - Categoria: ". $row["categoria"]."<br><br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>