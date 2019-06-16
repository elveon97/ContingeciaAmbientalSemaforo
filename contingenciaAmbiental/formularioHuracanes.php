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
    <title>Huracanes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <img src="../imgContingenciaAmbiental/logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Medición de huracanes CUSur</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
          <input type="hidden" name="form" id="form" value="Huracanes">
            <div class="form-group">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" id="inputNombre" name="Nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre del huracán" required>
            </div>
            <div class="form-group">
              <label for="inputCategoria">Categoría</label>
              <input type="number" class="form-control" id="inputCategoria" name="Categoria" placeholder="Ingrese categoría del huracán" required>
            </div>
            <div class="form-group">
              <label for="inputUbicacion">Ubicación</label>
              <input type="text" class="form-control" id="inputUbicacion" name="Ubicacion" placeholder="Ingrese ubicación" required>
            </div>
            <div class="form-group">
              <label for="inputRachas">Rachas de viento (km/hr)</label>
              <input type="number" class="form-control" id="inputRachas" name="Rachas" placeholder="Ingrese rachas de viento en km/hr" required>
            </div>
            <div class="form-group">
              <label for="inputM2">m²</label>
              <input type="number" class="form-control" id="inputM2" name="M2" placeholder="Ingrese m²" required>
            </div>
            <div class="form-group">
              <label for="inputValoracion">Valoración</label>
              <input type="text" class="form-control" id="inputValoracion" name="Valoracion" placeholder="Ingrese valoración" required>
            </div>
            <div class="form-group">
              <label for="inputInfo">Información para el usuario</label>
              <input type="text" class="form-control" id="inputInfo" name="info" placeholder="Ingrese el enlace donde se encuentra la información para el usuario" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputFecha">Fecha de publicación</label>
              <input type="date" class="form-control" id="inputFecha" name="Fecha" placeholder="Ingrese fecha de medición" required>
            </div>
            <div class="form-group">
              <label for="inputTime">Hora de publicación</label>
              <input type="time" class="form-control" id="inputHora" name="Hora" placeholder="Ingrese hora de medición" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="menu.php" class="btn btn-primary">Regresar</a>
        </form>
      </div>

    </div>
  </body>
</html>
