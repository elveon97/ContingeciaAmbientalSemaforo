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
    <title>Alerta volcánica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <img src="../imgContingenciaAmbiental/logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Alerta volcánica</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
            <input type="hidden" name="form" id="form" value="Volcan">
            <div class="form-group">
              <label for="inputFase">Fase</label>
              <input type="number" class="form-control" id="inputFase" name="Fase" aria-describedby="emailHelp" placeholder="Ingrese fase" required>
            </div>
            <div class="form-group">
              <label for="inputInfo">Información para el usuario</label>
              <input type="text" class="form-control" id="inputInfo" name="info" aria-describedby="emailHelp" placeholder="Ingrese el enlace donde se encuentra la información para el usuario" required>
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
