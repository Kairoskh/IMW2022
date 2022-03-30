<?php

include "libreria.php";

// INSERCIÓN DE PRODUCTOS

// Si se ha enviado el formulario 
if (isset($_POST["Enviar"]))  { 
  $empresa = test_input($_POST["empresa"]);
  $direccion = test_input($_POST["direccion"]);
  $envios_recientes = test_input($_POST["envios_recientes"]);
  $telefono = test_input($_POST["telefono"]);
  $provincia = test_input($_POST["provincia"]);
  $unidades_vendidas = test_input($_POST["unidades_vendidas"]);
  $categoria = $_POST["categoria"];
    // Creamos la conexión
  $conn = dbConnect();
  // Insertamos el dato del proveedor
  $sqlInsert = mysqli_query($conn,"INSERT INTO proveedores(empresa, direccion, envios_recientes, telefono, provincia, unidades_vendidas, categoria) 
  values ('$empresa','$direccion','$envios_recientes','$telefono','$provincia','$unidades_vendidas','$categoria');");
  // Cerramos la conexión
  mysqli_close($conn);
  // Redireccionamos a la consulta
  header("location:listavista.php");
}
else{
get_header();
?>
<!--FORMULARIO DE INSERCIÓN DE PROVEEDORES-->

<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <h2 class="mt-5">Inserta un Proveedor:</h2>
      
      <form class="was-validated" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Nombre de la empresa" required>
                <label for="empresa">Empresa:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con el nombre de la empresa del proveedor.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion de proveedor" required>
                <label for="direccion">Dirección:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo indicando la dirección del proveedor.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="date" name="envios_recientes" id="envios_recientes" class="form-control" required>
                <label for="fecha_salida">Envios recientes:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con la fecha de los envios recientes o envio que se hará actualmenta cuando registremos al proveedor en la BD.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Número del funko" pattern="[0-9]{9}" required>
                <label for="telefono">Teléfono:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con el número de telefono del proveedor.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="text" name="provincia" id="provincia" class="form-control" placeholder="Provincia del proveedor" required>
                <label for="provincia">Provincia:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con la provincia del proveedor.</div>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-floating">
                <input type="number" step="0.01" name="unidades_vendidas" id="unidades_vendidas" class="form-control" placeholder="Unidades vendidas del proveedor" required>
                <label for="unidades_vendidas">Unidades vendidas:</label>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor rellena este campo con las unidades vendidas de este proveedor (asumiendo que si entrara a la BD compraremos prodcutos del mismo).</div>
            </div>
        </div>
        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="categoria" aria-label="Selección de categoria">
                <option value="SERIES">Series de televisión o plataformas.</option>
                <option value="ANIMES">Series de anime.</option>
                <option value="PELICULAS">Peliculas en general.</option>
                <option value="VIDEOJUEGOS">Videojuegos en general.</option>
                <option value="VARIOS">Varias categorias anteriormente mencionadas.</option>
                <option value="TODAS">Todas las categorias anteriormente mencionadas.</option>
                <option value="OTRAS">Otras categorias diferentes.</option>
            </select>
            <label for="floatingSelect">Categoria de los productos del proveedor:</label>
        </div>
        <div class="form-group mt-3">
          <button type="submit" name="Enviar" class="btn btn-primary" value="Enviar"> Insertar valores </button>
         </div>
      </form>
            <div class="col col-md-6 justify-content-center">
                <a class="btn btn-success w-100 mt-4" href="listavista.php">Volver al listado de proveedores</a>
            </div>
    </div>
    <div class="col-12 col-md-6">
        <img src="images/proveedor.jpg" class="img-fluid" alt="">
    </div>
  </div>
</div>
<?php
}
get_footer();
?>

 
