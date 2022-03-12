<?php
// comprobamos si se ha iniciado la sesión
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}

include "libreria.php";
get_header();


// Creamos la conexión
$conn = dbConnect();
// El ID indica el proveedor para modificar
$id = $_GET['id'];
if ($id==0)
    $id=1;
// Primero realizamos consulta para ese ID
$query = mysqli_query($conn, "SELECT * FROM proveedores WHERE id='$id'");

$resul = mysqli_fetch_assoc($query);
  
// ACTUALIZACIÓN DEL PROVEEDOR

// Si se ha enviado el formulario 
if (isset($_POST["Actualizar"]))  { 
    $empresa = test_input($_POST["empresa"]);
    $direccion = test_input($_POST["direccion"]);
    $envios_recientes = test_input($_POST["envios_recientes"]);
    $telefono = test_input($_POST["telefono"]);
    $provincia = test_input($_POST["provincia"]);
    $unidades_vendidas = test_input($_POST["unidades_vendidas"]);
    $categoria = $_POST["categoria"];
    $id= $_POST["id"];

  // Actualizamos el dato del producto
  $sqlInsert = mysqli_query($conn,"UPDATE proveedores 
  SET empresa='$empresa',
  direccion='$direccion', 
  envios_recientes= '$envios_recientes',
  telefono='$telefono',
  provincia='$provincia',
  unidades_vendidas='$unidades_vendidas',
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
                <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Nombre de la empresa" value="<?php echo $resul['empresa']; ?>" required>
                <label for="empresa">Empresa</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección de la empresa" value="<?php echo $resul['direccion']; ?>" required>
                <label for="direccion">Dirección</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="date" name="envios_recientes" id="envios_recientes" class="form-control" placeholder="Envios recientes" value="<?php echo $resul['envios_recientes']; ?>" required>
                <label for="envios_recientes">Envios recientes</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Número de telefono" pattern="[0-9]{9}" value="<?php echo $resul['telefono']; ?>" required>
                <label for="telefono">Teléfono</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="provincia" id="provincia" class="form-control" placeholder="Provincia de la empresa" value="<?php echo $resul['provincia']; ?>" required>
                <label for="provincia">Provincia:</label>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="number" step="0.01" name="unidades_vendidas" id="unidades_vendidas" class="form-control" placeholder="Unidades vendidas" value="<?php echo $resul['unidades_vendidas']; ?>" required>
                <label for="unidades_vendidas">Unidades vendidas</label>
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
            <label for="floatingSelect">Categoria del proveedor:</label>
        </div>

        <!--AÑADIDO PARA SUBIR FOTO
        
        <br>
        <label class="form-check-label" for="foto">Añadir foto:</label>
        <input type="file" name="foto" id="foto" required>
        <br>

         $foto saldría de aquí-->

        <div class="form-group mt-3">
          <button type="submit" name="Actualizar" class="btn btn-primary" value="Actualizar"> Actualizar </button>
         </div>
      </form>
      <div class="col col-md-6">
                <a class="btn btn-success w-100 mt-4" href="listavista.php">Volver al listado de productos</a>
                </div>
    </div>
    <div class="col-12 col-md-6 mt-5">
        <img src="<?php echo $resul['foto'];?>" class="img-fluid" alt="Proveedor">
    </div>
  </div>
</div>
<?php
}
mysqli_free_result($query);
mysqli_close($conn);
get_footer();
?>

 