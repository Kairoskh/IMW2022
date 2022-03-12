<?php
// comprobamos si se ha iniciado la sesión
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}

include "libreria.php";
get_header();

// BÚSQUEDA DE PROVEEDORES

// Si se ha enviado el formulario 
if (isset($_POST["Buscar"]))  {
    // Creamos la conexión
    $conn = dbConnect();    
    // Desde el formulario cogemos el patrón de búsqueda
    $buscaproveedores = $_POST['buscaproveedores'];   
    $query = mysqli_query($conn,"SELECT * FROM proveedores WHERE empresa like '%$buscaproveedores%' or categoria like '%$buscaproveedores%'");
    $row=mysqli_num_rows($query);
    ?>
    <style>
    img{
        width: 400px;
        height: 280px;
    }
    </style>
    <div class="container ">
        <div class="row main-container text-center">
            <h2>Resultados de la búsqueda de proveedores:</h2>
            <?php
            if ($row){ //Si han habido resultados en la búsqueda
                while($resul = mysqli_fetch_assoc($query))
                {
                    ?>
                    <div class="col col-md-4">
                    <div class="card mt-4 shadow" style="width: 18rem;">
                    <img src="<?php echo $resul['foto'];?>" class="card-img-top" alt="Proveedores">
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $resul['empresa'];?></h5>
                        <h6 class='card-text'>Categoria: <?php echo $resul['categoria'];?> </h6>
                        <a class="btn btn-primary" href="detalle.php?id=<?php echo $resul['id'];?>">Ver</a>
                    </div>
                    </div>
                    </div>
                <?php
                }
            }
            else
            {?>
                <h2>Sin resultados</h2>
            <?php
            }
            ?>
        </div>
    </div>
<?php
mysqli_free_result($query);
mysqli_close($conn);
}    
else{
?>
<!--FORMULARIO DE BÚSQUEDA DE ESTUDIANTES-->
<div class="container">
    <div class="row main-container justify-content-center">
        <div class="col col-md-4 justify-content-center">
            <img src="images/busqueda.png" class="img-fluid" alt="busqueda">
            <h3 class="text-center">Búsqueda <span class="text-primary">Gestión de proveedores:</span></h3>
            <form method="POST" class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input class="form-control" name="buscaproveedores" type="search" placeholder="Búsqueda de proveedores" aria-label="Search">
                <button class="btn btn-primary btn-yellow mt-2 btn-block w-100" name="Buscar" type="submit">Buscar<span class="material-icons">search</span></button>
            </form>
        </div>
    </div>
</div>
<?php
}
get_footer();
?>
