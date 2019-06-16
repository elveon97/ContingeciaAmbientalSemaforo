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

  $fileName = "aireConf.txt";
  $conf = parse_ini_file($fileName, true);
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
        <img src="logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Alerta volcánica</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
            <input type="hidden" name="form" id="form" value="Volcan">
            <div class="form-group">
              <label for="inputFase">Fase</label>
              <select class="form-control" name="Fase">
                <option value="1" <?php if ($conf["V_FASE"] == "1") echo "selected='selected'"; ?>>1</option>
                <option value="2" <?php if ($conf["V_FASE"] == "2") echo "selected='selected'"; ?>>2</option>
                <option value="3" <?php if ($conf["V_FASE"] == "3") echo "selected='selected'"; ?>>3</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputInfo">Color del semáforo</label>
              <select class="form-control" name="color">
                <option value="verde" <?php if ($conf["V_COLOR"] == "verde") echo "selected='selected'"; ?>>Verde</option>
                <option value="amarillo" <?php if ($conf["V_COLOR"] == "amarillo") echo "selected='selected'"; ?>>Amarillo</option>
                <option value="rojo" <?php if ($conf["V_COLOR"] == "rojo") echo "selected='selected'"; ?>>Rojo</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputInfo">Enlace para el usuario</label>
              <input type="text" class="form-control" id="inputInfo" name="info" value="<?php echo $conf['V_INFO']; ?>" placeholder="Ingrese el enlace donde se encuentra la información para el usuario" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputFecha">Fecha de medición</label>
              <input type="date" class="form-control" id="inputFecha" value="<?php echo $conf['V_FECHA_RAW']; ?>" name="Fecha" placeholder="Ingrese fecha de medición" required>
            </div>
            <div class="form-group">
              <label for="inputTime">Hora de medición</label>
              <input type="time" class="form-control" id="inputHora" value="<?php echo $conf['V_HORA']; ?>" name="Hora" placeholder="Ingrese hora de medición" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="menu.php" class="btn btn-primary">Regresar</a>
        </form>
      </div>

    </div>
  </body>
</html>
