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
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contigencia ambiental CUSur</title>
  </head>
  <body>


    <div class="container">
      <div class="row mb-4">
        <img src="logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>

      <div class="row">
        <div class="col-10">
          <h2>Protección civil CUSur</h2>
        </div>
        <div class="col-2">
          <a href="cerrarSesion.php" class="btn btn-outline-danger">Salir</a>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col text-center">
          <h2>Semáforo en uso: <span class="text-primary font-weight-bold"> <?php $conf = parse_ini_file("aireConf.txt", true); echo $conf['USE']; ?></span></h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <form class="form-inline d-flex w-100 justify-content-center" action="actualizarSemaforo.php" method="post">
            <div class="form-group">
              <label for="">Cambiar semáforo</label>
              <select class="form-control ml-2 mr-4" name="Semaforo">
                <option value="Aire">Calidad del aire</option>
                <option value="Huracanes">Huracanes</option>
                <option value="Volcan">Alerta volcánica</option>
              </select>
              <button type="submit" name="button" class="btn btn-primary">Actualizar</button>
            </div>
          </form>
        </div>
      </div>

      <hr class="mt-5 mb-5">

      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Calidad del aire</h5>
              <p class="card-text">Configurar mediciones relativas a la calidad del aire. </p>
              <a href="formularioAire.php" class="btn btn-primary">Configurar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Huracanes</h5>
              <p class="card-text">Configurar mediciones relativas a los huracanes. </p>
              <a href="formularioHuracanes.php" class="btn btn-primary">Configurar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Alerta volcánica</h5>
              <p class="card-text">Configurar fase de la alerta volcánica. </p>
              <a href="formularioVolcan.php" class="btn btn-primary">Configurar</a>
            </div>
          </div>
        </div>

      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
