<?php

include "libreria.php";
get_header();

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
       <h2>Resultados de la búsqueda de PRODUCTOS:</h2>
        <?php 

        $query = mysqli_query($conn, "SELECT id, nombre, fabricacion, fecha_salida, numero, marca, precio, categoria FROM productos");

        // salida de datos de cada fila
        while($resul = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col col-md-4">
            <div class="card mt-4 shadow" style="width: 18rem;">
            <img src="images/funkofondo.png" class="card-img-top" alt="foto">

<!-- 

Código para ver las imagenes de cada producto segun su id asociandolo con la imagen cuyo nombre seria su id y con extencion .jpg
el fallo es que al insertar un nuevo producto habria que modificar el nombre de la imagen cuando se inserte en el formulario de insertar...
                
<img src="images/<?php //echo $resul['id'];?>.jpg" class="card-img-top" alt="foto"> 
        
-->
            <div class='card-body'>
                <h5 class='card-title'><?php echo $resul['nombre'];?></h5>
                <h6 class='card-text'>Categoria: <?php echo $resul['categoria'];?> </h6>
                <a class="btn btn-primary" href="detalle.php?id=<?php echo $resul['id'];?>">Ver</a>
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