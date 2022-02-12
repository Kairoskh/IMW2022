<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 3</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info text-center">
<?php

/*Realizar un script para crear una agenda online. 
Para ello elabora un formulario que permita introducir los datos del día 
(por ejemplo: interesa registrar la fecha, las citas o eventos con la hora, hábitos (gimnasio,…), cursos (clases de inglés,…) ) 
Usa controles diferentes (text, textarea, radio, etc) y muestra el informe del resultado.*/

// Definir variables y establecer valores vacios:

$fecha = $evento = $hora = $habitos = $habitos1 = $hora1 = $cursos = $cursos1 = $guardar = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if (isset($_GET['enviar']))
{
    $fecha = test_input($_GET["fecha"]);
    $evento = test_input($_GET["evento"]);
    $hora = test_input($_GET["hora"]);
    $habitos = test_input($_GET["habitos"]);
    $habitos1= test_input($_GET["habitos1"]);
    $hora1= test_input($_GET["hora1"]);
    $cursos = test_input($_GET["cursos"]);
    $cursos1 = test_input($_GET["cursos1"]);
    $guardar = test_input($_GET["recordar"]);
    echo "<h1>Tu agenda consiste en:</h1> <br/>Fecha: $fecha <br/> Eventos: $evento <br/>";
    echo "A la hora: $hora <br/> Habitos a realizar: $habitos<br/> A la hora: $hora1 <br/> Comentario o anotaciones de habitos: $habitos1 <br/>";
    echo "Cursos: $cursos <br/> Comentario de cursos: $cursos1 <br/>";
    echo "Guardar datos: $guardar <br/>";
   
    echo "<br><br><a class='btn btn-primary text-white text-decoration-none' href='tres.php'>Regresar</a>";
}
else
{
?>
 <div class="container mt-3">
  <div class="row">
    <div class="col-7">

  <h2>Agenda personal</h2>

  <form class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">

    <div class="mb-3 mt-3">
        <label for="fecha">Introduzca la fecha:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor rellena este campo.</div>
    </div>

    <div class="mb-3">
        <label for="evento">Cita o evento:</label>
        <textarea class="form-control" id="evento" rows="1" name="evento" placeholder="Escribe aquí tu cita o evento a realizar..." required></textarea>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor escribe lo que harás.</div>
    </div>

    <div class="mb-3">
        <label for="hora">Hora:</label>
        <input type="time" class="form-control" id="hora" name="hora" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor asigna la hora.</div>
    </div>

    <div class="mb-3">
        <label id="habitos">Selecciona uno de los siguientes a realizar:</label>
        <br>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="radio1" value="Ir al gimnasio" name="habitos">Ir al gimnasio.
        <label class="form-check-label" for="radio1"></label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="radio2" value="Ir a correr" name="habitos" checked>Ir a correr.
        <label class="form-check-label" for="radio2"></label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="radio3" value="Otros" name="habitos" >Otros.
        <label class="form-check-label" for="radio3"></label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" disabled>No hacer nada.
        <label class="form-check-label"></label>
    </div> 
    </div>
    <div class="mb-3">
        <label for="hora">Hora:</label>
        <input type="time" class="form-control" id="hora1" name="hora1" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor asgina la hora.</div>
    </div>
    <h5>Si no sabes que hacer, escribe algo en el siguiente recuadro o define lo que harás:</h5>
    
    <div class="mb-3">
        <textarea class="form-control" rows="1" name="habitos1" placeholder="Puedes Escribir aquí tu actividad a realizar..."></textarea>
    </div>
    

    <div class="form-group">
        <label for="cursos">Cursos a realizar selecciona uno:</label>
        <select multiple class="form-control" id="cursos" name="cursos" required>
            <option value="Inglés">Inglés</option>
            <option value="Francés">Francés</option>
            <option value="Ciclo superior Administracion de sistemas informáticos y redes">Ciclo superior Administracion de sistemas informáticos y redes</option>
            <option value="Ciclo de cibersegurirad">Ciclo de cibersegurirad</option>
            <option value="Introducción a la programación">Introducción a la programación</option>
            <option value="Otros">Otros</option>
        </select>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor selecciona una opción.</div>
    </div>

    <h5>Si tu respuesta fue "Otros", define o escribe cuál curso o cursos realizarás:</h5>

    <div class="mb-3">
        <textarea class="form-control" rows="1" name="cursos1" placeholder="Puedes Escribir aquí tu curso o cursos a realizar..."></textarea>
    </div>

  <div class="form-check mt-3 mb-3">
    <input class="form-check-input" type="checkbox" id="checkbox" name="recordar" value="Activado" required>
    <label class="form-check-label" for="checkbox">Recordar datos.</label>
    <div class="valid-feedback">Valido.</div>
    <div class="invalid-feedback">Acepta este campo para continuar.</div>
  </div>

    <button type="submit" class="btn btn-primary mb-5" name="enviar">Enviar datos</button>

  </form>  
  </div>  
            <div class="col-5">
                    <aside class="mt-5 p-4 bg-black text-white rounded-pill">
                        <h3>¡Organiza tu día!</h3>
                        <p>Fecha, citas, actividades, eventos, cursos, anotaciones, entre otros.</p>
                    </aside>
            </div>

    </div>
</div>

<?php
}
?>
</body>
</html>