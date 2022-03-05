<?php

include "libreria.php";
get_header();

// Creamos la conexión
$conn = dbConnect();
// Comprobamos la conexión

$id = $_GET['id'];

// Primero realizamos consulta para ese ID
$query = mysqli_query($conn, "SELECT * FROM productos WHERE id='$id'");

$resul = mysqli_fetch_assoc($query);
  
?>
<style>
  img{
    width: 450px;
    height: 360px;
  }
</style>
<div class="container mt-5">
    <div class="row gx-4">
        <!-- Listar datos -->
        <div class="col col-md-6">
            
            <h2><span class="text-primary">Identificador</span></h2>
            <h4><?php echo $resul['id'];?></h4>
            
            <h2><span class="text-primary">Nombre:</span></h2>
            <h4><?php echo $resul['nombre'];?></h4>
           
            <h2><span class="text-primary">Fabricación:</span></h2>
            <h4><?php echo $resul['fabricacion'];?></h4>
            <hr>
            <h2><span class="text-primary">Fecha de salida:</span></h2>
            <h4><?php echo $resul['fecha_salida'];?></h4>
            <hr>
            <h2><span class="text-primary">Número:</span></h2>
            <h4><?php echo $resul['numero'];?></h4>
            <hr>
            <h2><span class="text-primary">Marca:</span></h2>
            <h4><?php echo $resul['marca'];?></h4>
            <hr>
            <h2><span class="text-primary">Precio:</span></h2>
            <h4><?php echo $resul['precio'];?></h4>
            <hr>
            <h2><span class="text-primary">Categoria:</span></h2>
            <h4><?php echo $resul['categoria'];?></h4>
        </div>
        <!-- Ver foto y botones -->
        <div class="col col-md-6">
        <?php 
        
        if ($resul['id'] == 1 
            ||$resul['id'] == 2
            ||$resul['id'] == 3
            ||$resul['id'] == 4
            ||$resul['id'] == 5
            ||$resul['id'] == 6
            ||$resul['id'] == 7)
            {
          echo "<img src='images/$id.jpg' class='rounded mx-auto d-block' alt='Funko'>";}
        else{ 
          echo "<img src='images/funkofondo.png' class='rounded mx-auto d-block' alt='Funko'>";};
        
        ?>
            <!-- <img src="funkofondo.png" class="rounded-circle mx-auto d-block" alt=""> -->
            <div class="row justify-content-center">
                <!-- Button a consulta_view -->
                <div class="col col-md-4">
                <a class="btn btn-primary w-100 mt-4" href="listavista.php">Volver</a>
                </div>
                <!-- Button a actualiza (no está realizado) -->
                <div class="col col-md-4">
                <a class="btn btn-success w-100 mt-4" href="actualiza.php?id=<?php echo $resul['id']; ?>">Actualizar</a>
                </div>
                <div class="col col-md-4">
                <a class="btn btn-warning w-100 mt-4" href="inserta.php">Añadir producto</a>
                </div>
                <div class="col col-md-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger w-100 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                       <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                ¿Estás seguro que quieres eliminar este estudiante?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Recuerda que se eliminará de la base de datos definitivamente. 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mt-1" data-bs-dismiss="modal">No eliminar</button>
                            <!-- Button a borra (no está realizado) -->
                            <a class="btn btn-danger" href="borra.php?id=<?php echo $resul['id'];?>">Eliminar</a>
                          </div>
                        </div>
                      </div>
                    </div>                   
                </div>              
            </div>           
        </div>
    </div>
</div>
<?php    
mysqli_free_result($query);
?>
</div>
</div>
<?php
mysqli_close($conn);
get_footer();
?>