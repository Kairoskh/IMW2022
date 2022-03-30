<?php

include "libreria.php";
get_header();

// Creamos la conexión
$conn = dbConnect();
// El ID indica el estudiante para modificar
$id = $_GET['id'];
if ($id==0)
    $id=1;
// Primero realizamos consulta para ese ID
$query = mysqli_query($conn, "SELECT * FROM productos WHERE id='$id'");

$resul = mysqli_fetch_assoc($query);
  
// ACTUALIZACIÓN DEL PRODUCTO 

// Si se ha enviado el formulario 
if (isset($_POST["Actualizar"]))  { 
    $nombre = test_input($_POST["nombre"]);
    $fabricacion = test_input($_POST["fabricacion"]);
    $fecha_salida = test_input($_POST["fecha_salida"]);
    $numero = test_input($_POST["numero"]);
    $marca = test_input($_POST["marca"]);
    $precio = test_input($_POST["precio"]);
    $categoria = $_POST["categoria"];
    $id= $_POST["id"];

  // Actualizamos el dato del PRODUCTO
  $sqlInsert = mysqli_query($conn,"UPDATE alumnos 
  SET nombre='$nombre',
  fabricacion='$fabricacion', 
  fecha_salida= '$fecha_salida',
  numero='$numero',
  marca='$marca',
  precio='$precio',
  categoria='$categoria'
  WHERE id='$id'");
  // Redireccionamos a la consulta
  header("location:detalle.php?id=$id");
}
else{
get_header();
?>
<!--FORMULARIO DE ACTUALIZACIÓN DE PRODUCTOS-->

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <h2 class="mt-5">Actualiza el Funko:</h2>
      
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input id="id" name="id" type="hidden" value="<?php echo $resul['id']; ?>">
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $resul['nombre']; ?>" required>
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="fabricacion" id="fabricacion" class="form-control" placeholder="Donde se fabrico" value="<?php echo $resul['fabricacion']; ?>" required>
                <label for="fabricacion">Fabricación</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" placeholder="Fecha de salida" value="<?php echo $resul['fecha_salida']; ?>" required>
                <label for="telefono">Fecha de salida</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="numero" id="numero" class="form-control" placeholder="Número del Funko" pattern="[0-9]{3}" value="<?php echo $resul['numero']; ?>" required>
                <label for="numero">Número del Funko</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca del funko" value="<?php echo $resul['marca']; ?>" required>
                <label for="marca">Marca del Funko</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="Precio" value="<?php echo $resul['precio']; ?>" required>
                <label for="numero">Precio del Funko</label>
            </div>
        </div>
        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="categoria" aria-label="Floating label select example">
                <option selected><?php echo $resul['categoria']; ?></option>
                <option value="SERIES">Series de televisión o plataformas.</option>
                <option value="ANIMES">Series de anime.</option>
                <option value="PELICULAS">Peliculas en general.</option>
                <option value="VIDEOJUEGOS">Videojuegos en general.</option>
                <option value="VARIOS">Varias categorias anteriormente mencionadas.</option>
                <option value="TODAS">Todas las categorias anteriormente mencionadas.</option>
                <option value="OTRAS">Otras categorias diferentes.</option>
            </select>
            <label for="floatingSelect">Categoria del funko:</label>
        </div>
        <div class="form-group mt-3">
          <button type="submit" name="Actualizar" class="btn btn-primary" value="Actualizar"> Actualizar </button>
         </div>
      </form>
    </div>
    <div class="col-12 col-md-6">
        <img src="images/funkofondo.png" class="img-fluid" alt="">
    </div>
  </div>
</div>
<?php
}
mysqli_free_result($query);
mysqli_close($conn);
get_footer();
?>

 
