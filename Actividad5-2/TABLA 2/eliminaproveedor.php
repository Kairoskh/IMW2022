<?php
// comprobamos si se ha iniciado la sesión
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}


include "libreria.php";
// Creamos la conexión
$conn = dbConnect();
// El ID indica el estudiante para eliminar
$id = $_GET['id'];
if ($id!=0){
 // Realiza el borrado para ese ID
$query = mysqli_query($conn, "DELETE FROM proveedores WHERE id='$id'");
}
// Redireccionamos a la consulta
header("location:listavista.php");
mysqli_close($conn);

?>