<?php
// Comprobamos si se ha iniciado la sesión
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
    exit();
}


include "libreria.php";

// INSERCIÓN DE PRODUCTOS

// Si se ha enviado el formulario 
if (isset($_POST["Enviar"]))  { 
  $nombre = test_input($_POST["nombre"]);
  $fabricacion = test_input($_POST["fabricacion"]);
  $fecha_salida = test_input($_POST["fecha_salida"]);
  $numero = test_input($_POST["numero"]);
  $marca = test_input($_POST["marca"]);
  $precio = test_input($_POST["precio"]);
  $categoria = $_POST["categoria"];
  //AÑADIDO PARA SUBIR FOTOS
  $foto = subefoto();
    // Creamos la conexión
  $conn = dbConnect();
  // Insertamos el dato del producto
  $sqlInsert = mysqli_query($conn,"INSERT INTO productos(nombre, fabricacion, fecha_salida, numero ,marca, precio, categoria, foto) 
  values ('$nombre','$fabricacion','$fecha_salida','$numero','$marca','$precio','$categoria','$foto');");
  // Cerramos la conexión
  mysqli_close($conn);
  // Redireccionamos a la consulta
  header("location:listavista.php");
}
else{
get_header();
get_navbar();
?>
<!--FORMULARIO DE INSERCIÓN DE PRODUCTOS-->

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <h2 class="mt-5">Inserta un Funko pop:</h2>
      
      <form class="was-validated" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                <label for="nombre">Nombre:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con el nombre del funko pop.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="fabricacion" id="fabricacion" class="form-control" placeholder="Donde se fabrico" required>
                <label for="fabricacion">Fabricación:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo indicando donse se fabrico.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="date" name="fecha_salida" id="fecha_salida" class="form-control" required>
                <label for="fecha_salida">Fecha de salida:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con la fecha de salida del funko pop.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="numero" id="numero" class="form-control" placeholder="Número del funko" pattern="[0-9]{3}" required>
                <label for="numero">Número del funko pop:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con el número del funko solo valen 3 digitos ejemplo: 001 - 999.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" required>
                <label for="marca">Marca:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="Precio" required>
                <label for="precio">Precio:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con el precio con decimales normales o a dos cifras por ejempo 19.99.</div>
            </div>
        </div>
        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="categoria" aria-label="Seleccion de categoria">
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

        <!--AÑADIDO PARA SUBIR FOTO-->
        <br>
        <label class="form-check-label" for="foto">Añadir foto:</label>
        <input type="file" name="foto" id="foto" required>
        <br>

        <!-- $foto saldría de aquí-->
        <div class="form-group mt-3">
          <button type="submit" name="Enviar" class="btn btn-primary" value="Enviar"> Insertar valores </button>
         </div>
      </form>
            <div class="col col-md-6 justify-content-center">
                <a class="btn btn-success w-100 mt-4" href="listavista.php">Volver al listado de productos</a>
            </div>
    </div>
    <div class="col-12 col-md-6 mt-3">
        <img src="images/funko.png" class="img-fluid" alt="">
    </div>
  </div>
</div>
<?php
}
get_footer();
?>

 