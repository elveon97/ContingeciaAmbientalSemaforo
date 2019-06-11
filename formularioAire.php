<?php
  session_start();
  if ($_SESSION) {
    if (! ($_SESSION['username'] == 'proteccioncivil')) {
      header("Location: login.php?error=1");
      die();
    }
  } else {
    header("Location: login.php?error=1");
    die();
  }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calidad del aire</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <img src="logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Calidad del aire CUSur</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
            <input type="hidden" name="form" id="form" value="Aire">
            <div class="form-group">
              <label for="inputPM">PM</label>
              <input type="text" class="form-control" id="inputPM" name="PM" aria-describedby="emailHelp" placeholder="Ingrese PM" required>
            </div>
            <div class="form-group">
              <label for="inputMCG">MCG/MT</label>
              <input type="text" class="form-control" id="inputMCG" name="MCG" placeholder="Ingrese MCG/MT" required>
            </div>
            <div class="form-group">
              <label for="inputCO">CO</label>
              <input type="text" class="form-control" id="inputCO" name="CO" placeholder="Ingrese CO" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputFecha">Fecha de medición</label>
              <input type="date" class="form-control" id="inputFecha" name="Fecha" placeholder="Ingrese fecha de medición" required>
            </div>
            <div class="form-group">
              <label for="inputTime">Hora de medición</label>
              <input type="time" class="form-control" id="inputHora" name="Hora" placeholder="Ingrese hora de medición" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="menu.php" class="btn btn-primary">Regresar</a>
        </form>
      </div>

    </div>
  </body>
</html>
