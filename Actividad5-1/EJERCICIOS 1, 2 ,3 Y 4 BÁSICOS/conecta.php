<?php

//Procedural

$servername = "localhost";
$username = "root";
$password = "majada";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}
echo "¡Conexión exitosa!";
?> 