<!DOCTYPE html>
<html lang="es">
<head>
  <title>Juego de cartas a elección</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="text-center">
<?php

// Considerando que se ha jugado 
function sacar($cartas, $usuario)
{
    echo "<span class='badge bg-secondary me-5 ms-5'> $usuario:</span>";
    switch ($cartas) {
        case "C1":
            echo "<img class='img-fluid rounded' src='cor1.png'  alt='1 de corazones' width=100 height=100>";
          break;
        case "C2":
            echo "<img class='img-fluid rounded' src='cor2.png' alt='2 de corazones' width=100 height=100>";
          break;
        case "C3":
            echo "<img class='img-fluid rounded' src='cor3.png' alt='3 de corazones' width=100 height=100>";
          break;
        case "C4":
            echo "<img class='img-fluid rounded' src='cor4.png'  alt='4 de corazones' width=100 height=100>";
          break;
        case "C5":
            echo "<img class='img-fluid rounded' src='cor5.png' alt='5 de corazones' width=100 height=100>";
          break;
        case "C6":
            echo "<img class='img-fluid rounded' src='cor6.png' alt='6 de corazones' width=100 height=100>";
          break;
        case "C7":
            echo "<img class='img-fluid rounded' src='cor7.png'  alt='7 de corazones' width=100 height=100>";
          break;
        case "C8":
            echo "<img class='img-fluid rounded' src='cor8.png' alt='8 de corazones' width=100 height=100>";
          break;
        case "C9":
            echo "<img class='img-fluid rounded ' src='cor9.png' alt='9 de corazones' width=100 height=100>";
          break;
        case "C10":
            echo "<img class='img-fluid rounded' src='cor10.png'  alt='10 de corazones' width=100 height=100>";
          break;
        case "C11":
            echo "<img class='img-fluid rounded' src='cor11.png' alt='11 de corazones' width=100 height=100>";
          break;
        case "C12":
            echo "<img class='img-fluid rounded' src='cor12.png' alt='12 de corazones' width=100 height=100>";
          break;
        case "C13":
            echo "<img class='img-fluid rounded' src='cor13.png' alt='13 de corazones' width=100 height=100>";
        break;
      }
}

if (isset($_POST["jugar"])) { // Si se ha enviado el formulario 
    $jugada = $_POST["jugada"];
    $juego=array("C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C10", "C11", "C12", "C13");
    $maquina = $juego[rand(0,12)];
    echo "<div class='container mt-3'>";
    sacar($jugada,"Jugador");
    sacar($maquina,"Maquina");
    if ($jugada == $maquina)
        echo "<h4 class='mt-3'>Ambos jugadores sacaron las mismas cartas por lo tanto:</h4> 
        <br> <h1><span class='badge bg-danger mt-3'>Empate</span></h1><br>
        <a class='btn btn-primary text-white text-decoration-none' href='original.php'>Regresar</a>";

    //C2
    elseif($jugada == "C2" && $maquina == "C1"
    //C3
    || $jugada == "C3" && $maquina == "C1"
    || $jugada == "C3" && $maquina == "C2"
    //C4
    || $jugada == "C4" && $maquina == "C1"
    || $jugada == "C4" && $maquina == "C2"
    || $jugada == "C4" && $maquina == "C3"
    //C5
    || $jugada == "C5" && $maquina == "C1"
    || $jugada == "C5" && $maquina == "C2"
    || $jugada == "C5" && $maquina == "C3"
    || $jugada == "C5" && $maquina == "C4"
    //C6
    || $jugada == "C6" && $maquina == "C1"
    || $jugada == "C6" && $maquina == "C2"
    || $jugada == "C6" && $maquina == "C3"
    || $jugada == "C6" && $maquina == "C4"
    || $jugada == "C6" && $maquina == "C5"
    //C7
    || $jugada == "C7" && $maquina == "C1"
    || $jugada == "C7" && $maquina == "C2"
    || $jugada == "C7" && $maquina == "C3"
    || $jugada == "C7" && $maquina == "C4"
    || $jugada == "C7" && $maquina == "C5"
    || $jugada == "C7" && $maquina == "C6"
    //C8
    || $jugada == "C8" && $maquina == "C1"
    || $jugada == "C8" && $maquina == "C2"
    || $jugada == "C8" && $maquina == "C3"
    || $jugada == "C8" && $maquina == "C4"
    || $jugada == "C8" && $maquina == "C5"
    || $jugada == "C8" && $maquina == "C6"
    || $jugada == "C8" && $maquina == "C7"
    //C9
    || $jugada == "C9" && $maquina == "C1"
    || $jugada == "C9" && $maquina == "C2"
    || $jugada == "C9" && $maquina == "C3"
    || $jugada == "C9" && $maquina == "C4"
    || $jugada == "C9" && $maquina == "C5"
    || $jugada == "C9" && $maquina == "C6"
    || $jugada == "C9" && $maquina == "C7"
    || $jugada == "C9" && $maquina == "C8"
    //C10
    || $jugada == "C10" && $maquina == "C1"
    || $jugada == "C10" && $maquina == "C2"
    || $jugada == "C10" && $maquina == "C3"
    || $jugada == "C10" && $maquina == "C4"
    || $jugada == "C10" && $maquina == "C5"
    || $jugada == "C10" && $maquina == "C6"
    || $jugada == "C10" && $maquina == "C7"
    || $jugada == "C10" && $maquina == "C8"
    || $jugada == "C10" && $maquina == "C9"
    //C11
    || $jugada == "C11" && $maquina == "C1"
    || $jugada == "C11" && $maquina == "C2"
    || $jugada == "C11" && $maquina == "C3"
    || $jugada == "C11" && $maquina == "C4"
    || $jugada == "C11" && $maquina == "C5"
    || $jugada == "C11" && $maquina == "C6"
    || $jugada == "C11" && $maquina == "C7"
    || $jugada == "C11" && $maquina == "C8"
    || $jugada == "C11" && $maquina == "C9"
    || $jugada == "C11" && $maquina == "C10"
    //C12
    || $jugada == "C12" && $maquina == "C1"
    || $jugada == "C12" && $maquina == "C2"
    || $jugada == "C12" && $maquina == "C3"
    || $jugada == "C12" && $maquina == "C4"
    || $jugada == "C12" && $maquina == "C5"
    || $jugada == "C12" && $maquina == "C6"
    || $jugada == "C12" && $maquina == "C7"
    || $jugada == "C12" && $maquina == "C8"
    || $jugada == "C12" && $maquina == "C9"
    || $jugada == "C12" && $maquina == "C10"
    || $jugada == "C12" && $maquina == "C11"
    //C13
    || $jugada == "C13" && $maquina == "C1"
    || $jugada == "C13" && $maquina == "C2"
    || $jugada == "C13" && $maquina == "C3"
    || $jugada == "C13" && $maquina == "C4"
    || $jugada == "C13" && $maquina == "C5"
    || $jugada == "C13" && $maquina == "C6"
    || $jugada == "C13" && $maquina == "C7"
    || $jugada == "C13" && $maquina == "C8"
    || $jugada == "C13" && $maquina == "C9"
    || $jugada == "C13" && $maquina == "C10"
    || $jugada == "C13" && $maquina == "C11"
    || $jugada == "C13" && $maquina == "C12")
    {
        echo "<h4 class='mt-3'>El Jugador ha sacado una carta mayor que la de la CPU por lo tanto:</h4>";
        echo "<h1><span class='badge bg-success mt-3'>¡Gana el jugador!</span></h1>";
        echo "<a class='btn btn-primary text-white text-decoration-none' href='original.php'>Regresar</a>";
    }
        
    else{
        echo "<h4 class='mt-3'>La CPU ha sacado una carta mayor que la del jugador por lo tanto:</h4>";
        echo "<h1><span class='badge bg-danger mt-3'>¡Gana la CPU!</span></h1>";
        echo "<a class='btn btn-primary text-white text-decoration-none' href='original.php'>Regresar</a>";
    }
    echo "</div>";
}
else
{

?>
<div class="container mt-3">
    <h1>Juego de cartas a comparar con la máquina</h1>
    <h2>Elige tu opción:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="row">
        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C1">
                <img class="img-fluid" src="cor1.png" alt="1 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C1" name="jugada" value="C1" >
        </div>
        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C2">
                <img class="img-fluid" src="cor2.png" alt="2 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C2" name="jugada" value="C2" >
        </div>
        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C3">
                <img class="img-fluid" src="cor3.png" alt="3 de corazones" width="100" height="100">
            </label>  <br> 
            <input type="radio" class="form-check-input" id="C3" name="jugada" value="C3" >  
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C4">
                <img class="img-fluid" src="cor4.png" alt="4 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C1" name="jugada" value="C4" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C5">
                <img class="img-fluid" src="cor5.png" alt="5 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C5" name="jugada" value="C5" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C6">
                <img class="img-fluid" src="cor6.png" alt="6 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C1" name="jugada" value="C6" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C7">
                <img class="img-fluid" src="coR7.png" alt="7 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C7" name="jugada" value="C7" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C8">
                <img class="img-fluid" src="cor8.png" alt="8 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C8" name="jugada" value="C8" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C9">
                <img class="img-fluid" src="cor9.png" alt="9 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C9" name="jugada" value="C9" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C10">
                <img class="img-fluid" src="cor10.png" alt="10 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C10" name="jugada" value="C10" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C11">
                <img class="img-fluid" src="cor11.png" alt="11 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C11" name="jugada" value="C11" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C12">
                <img class="img-fluid" src="cor12.png" alt="12 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C12" name="jugada" value="C12" >
        </div>

        <div class="col-md-2 col-12">
            <label class="form-check-label" for="C13">
                <img class="img-fluid" src="cor13.png" alt="13 de corazones" width="100" height="100">
            </label><br>
            <input type="radio" class="form-check-input" id="C13" name="jugada" value="C13" >
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="jugar" value="jugar" >JUGAR!</button>
    </form>
</div>
<?php
}
?>
</body>
</html>