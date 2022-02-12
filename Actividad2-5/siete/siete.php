<!DOCTYPE html>
<html lang="es">
<head>
<title>Ejercicio 7</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon5.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <style>
    .tarjeta  span { 
        padding-top:10px; 
    }
    .tarjeta img { 
        padding-top:30px; 
    }
    .tarjeta .small-font { 
        font-size:9px; 
    }
    .tarjeta .pad-adjust { 
        padding-top:10px; 
    }
  </style>
</head>
<body class="bg-light">

<?php

// Definir variables y establecer valores vacios:

$numerot = $mes = $year = $cvv = $titular = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['enviar'])){
    $numerot = test_input($_POST["numerot"]);
    $mes = test_input($_POST["mes"]);
    $year = test_input($_POST["year"]);
    $cvv = test_input($_POST["cvv"]);
    $titular = test_input($_POST["titular"]);
    echo "<h2 class='text-center'>Los datos enviados son:</h2>";
    echo"<p class='text-center'>";
    echo "<br/>Número de la tarjeta: $numerot <br/> Mes de vencimiento: $mes <br/>";
    echo " Año: $year <br/> CVV: $cvv <br/> Titular: $titular";
    echo "</p>";
    echo "<br><h2 class='text-center'>Si algo esta erroneo, puedes regresar haciendo click: <a class='btn btn-primary text-white text-decoration-none' href='cinco.php'>AQUÍ</a></h2>";
    echo "<br><h2 class='text-center'>Muchas gracias por tu pedido, esperamos verte pronto...</h2>";
}
else
{
?>  

<!--Escribe un script que simule una calculadora con dos operadores y tres operandos.-->

<!--Formulario tarjeta de credito:-->
<div class="container mt-3 mb-4" >
    <h2 class="text-center mb-4">Rellena los datos de pago, para efectuar el pedido:</h2>
    <form class="tarjeta was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="panel panel-default" >
         <div class="panel-heading">
            <div class="row ">
              <div class="col-md-12">
                    <input type="text" name ="numerot" class="form-control" placeholder="Ingresa el número de la tarjeta" pattern="[0-9]{15,16}|(([0-9]{4}\s){3}[0-9]{3,4})" title="Número de la tarjeta de 15 a 16 digitos." required/>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor rellena bien este campo (15 o 16 números depende de tu tarjeta).</div>
                </div>
            </div>
             <div class="row ">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span class="help-block text-muted small-font" > Mes de vencimiento</span>
                    <select name="mes" class="form-select">
                        <option value="Enero">01 </option>
                        <option value="Febrero">02 </option>
                        <option value="Marzo">03 </option>
                        <option value="Abril">04 </option>
                        <option value="Mayo" selected>05 </option>
                        <option value="Junio">06 </option>
                        <option value="Julio">07 </option>
                        <option value="Agosto">08 </option>
                        <option value="Septiembre">09 </option>
                        <option value="Octubre">10 </option>
                        <option value="Noviembre">11 </option>
                        <option value="Diciembre">12 </option>
                    </select>
                </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <span class="help-block text-muted small-font" >  Año de vencimiento</span>
                <select name="year" class="form-select">
                        <option value="2022">2022 </option>
                        <option value="2023">2023 </option>
                        <option value="2024" selected>2024 </option>
                        <option value="2025">2025 </option>
                        <option value="2026" >2026 </option>
                        <option value="2027">2027 </option>
                        <option value="2028">2028 </option>
                        <option value="2029">2029 </option>
                        <option value="2030">2030 </option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <span class="help-block text-muted small-font" >  CCV</span>
                    <input type="text" name="cvv"  class="form-control" placeholder="CCV" pattern="[0-9]{3}" title="Colocar los 3 digitos del CVV que tiene su tarjeta" required/>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor rellena bien este campo.</div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-3">
                    <img src="card.png" alt="Tarjeta" class="img-rounded" style="width:20%"/>
                 </div>
            </div>
             <div class="row ">
                <div class="col-md-12 pad-adjust">
                    <input type="text" name="titular" class="form-control" placeholder="Ingresa el nombre del titular de la tarjeta" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Introduce el nombre del titular de la tarjeta sin simbolos, solo letras." required/>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor rellena bien este campo.</div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12 pad-adjust">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" checked class="text-muted"> Guardar datos (opcional).
                        </label>
                    </div>
                </div>
             </div>
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-6 pad-adjust mt-3 text-center">
                        <input type="submit"  class="btn btn-danger me-1" value="Cancelar" />
                        <input type="submit"  class="btn btn-secondary btn-block me-1" value="Reiniciar datos" />
                        <input type="submit"  class="btn btn-primary btn-block" name= "enviar" value="Pagar ahora" />
                    </div>
                </div>
        </div>
        </div>
        </form>
    </div>
		
<?php
}
?>
</body>
</html>