<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form {color:white; font-size:16px;text-align:center;} fieldset {text-align:left;margin:0 auto; width:270px;}
        legend {text-align:left;color:blue;} p {color:white; font-size:20px;}
    </style>
</head>
<body class="bg-info text-center">
<?php

/*Escribe un script que muestre un formulario con varios campos de texto y que permita enviarlos usando el método GET. 
El mismo script será capaz de recibir estos datos enviados por el formulario y los mostrará.*/

// Definir variables y establecer valores vacios:

$nombre = $apellido = $calle = $codigo = $localidad = $correo = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if (isset($_GET['enviar']))
{
    $nombre = test_input($_GET["nombre"]);
    $apellido = test_input($_GET["apellido"]);
    $localidad = test_input($_GET["localidad"]);
    $codigo = test_input($_GET["codigo"]);
    $calle = test_input($_GET["calle"]);
    $correo = test_input($_GET["correo"]);
    echo "<h2>Los datos recogidos son:</h2> <br/>Nombre: $nombre <br/> Apellido: $apellido <br/>";
    echo " Direccion: Calle $calle CP $codigo en $localidad <br/>";
    echo "Correo electrónico: $correo <br/>";
    
    echo "<br><br><a class='btn btn-primary text-white text-decoration-none' href='uno.php'>Regresar</a>";
}
else
{
?>
    <h1>Datos personales</h1>
    <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <fieldset><legend>Usuario</legend>
    
        Nombre:<input class="form-control" placeholder="Pedro" type="text" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Introduce tu nombre sin simbolos, solo letras." required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
        
        Apellido:<input class="form-control" placeholder="Pinar" type="text" name="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Introduce tu apellido sin simbolos, solo letras." required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
    
    </fieldset>
    <fieldset><legend>Dirección</legend>

        Calle:<input class="form-control" placeholder="C/ Peralta" type="text" name="calle" maxlength="50" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
        
        Codigo postal:<input class="form-control" placeholder="Solo 5 números ejemplo: 35600" type="text" name="codigo" maxlength="5" pattern="^[0-9][1-9]{3}[0-9]$" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
        
        Localidad:<input class="form-control" placeholder="Puerto del Rosario" type="text" name="localidad" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Introduce la localidad, solo letras." required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
        
        Correo:<input class="form-control" placeholder="ejemplo@prueba.com" type="email" name="correo" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
    
    </fieldset>
    <p> <input class="mt-2 bg-primary text-white" type='submit' name="enviar" value="Enviar datos" > </p>
    </form>
<?php
}
?>
</body>
</html>