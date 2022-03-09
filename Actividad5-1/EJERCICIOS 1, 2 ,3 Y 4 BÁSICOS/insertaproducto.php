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

$sql = "INSERT INTO productos (nombre, fabricacion, fecha_salida, numero, marca, precio, categoria) VALUES
('BATMAN','China','2015-12-12','288','Funko','28,95','VARIOS')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
