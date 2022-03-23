<?php
session_start();
include "libreria.php";
get_header();
get_navbar();

// Si se ha enviado el formulario
if (isset($_POST["Entrar"]))  
{
    $usuario = test_input($_POST['usuario']);
    $pass = test_input($_POST['pass']);  
    $conn = dbConnect();    
    // Consultamos para ver si existe el usuario
    $query = mysqli_query($conn,"SELECT * FROM usuarios WHERE id='$usuario' and pass='$pass'");
    $resul = mysqli_fetch_assoc($query);
    // También: $row= mysqli_num_rows($query);
    // Comparamos con los datos del formulario
    if($resul['id'] == $usuario && $resul['pass'] == $pass){
        // establecemos una variable de sesión
        $_SESSION['user']=$usuario;
        // Vamos a búsqueda
        header("location:busquedaproducto.php");
    }else{
        header("location:login.php");
    }
    mysqli_free_result($query);
    mysqli_close($conn);
}
else{
?>
<style>
    img{
        width: 360px;
        height: 280px;
    }
</style>
<div class="container mb-5">
    <div class="row main-container justify-content-center align-items-center">
        <div class="col col-md-4 justify-content-center">
        <h2 class="text-center">Bienvenid@ a la aplicación <span class="text-primary">Gestión de base de datos Funko pop</span></h2>
        <img src="images/user.png" class="rounded" alt="Usuario">
            <form method="POST" class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input class="form-control mt-3" name="usuario" type="user" placeholder="Nombre de usuario" aria-label="Usuario" required>
                <input class="form-control mt-3" name="pass" type="password" placeholder="Contraseña" aria-label="Pass" required>
                <button class="btn btn-primary btn-yellow mt-2 btn-block w-100" name="Entrar" type="submit">Entrar<span class="material-icons">search</span></button>
            </form>
        </div>
    </div>
</div>
<?php
}
get_footer();
?>
