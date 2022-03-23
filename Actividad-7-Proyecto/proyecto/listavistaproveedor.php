<?php
// Comprobamos si se ha iniciado la sesión
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}

include "libreria.php";
get_header();
get_navbar();

// Creamos la conexión
$conn = dbConnect();
// Comprobamos la conexión

?>
<style>
    img{
        width: 400px;
        height: 280px;
    }
</style>
<div class="container">
   <div class="row">
       <h2>Resultados de la búsqueda de PROVEEDORES:</h2>
        <?php 

        $query = mysqli_query($conn, "SELECT id, empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria, foto FROM proveedores");

        // Salida de datos de cada fila
        while($resul = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col col-md-4">
            <div class="card mt-4 shadow" style="width: 18rem;">
            <img src="<?php echo $resul['foto'];?>" class="card-img-top" alt="Funko">
            <div class='card-body'>
                <h5 class='card-title'><?php echo $resul['empresa'];?></h5>
                <h6 class='card-text'>Categoria: <?php echo $resul['categoria'];?> </h6>
                <a class="btn btn-primary" href="detalleproveedor.php?id=<?php echo $resul['id'];?>">Ver</a>
            </div>
            </div>
            </div>  

        <?php    
        }
        mysqli_free_result($query);
        ?>
   </div>
</div>
<?php
mysqli_close($conn);
get_footer();
?>

           