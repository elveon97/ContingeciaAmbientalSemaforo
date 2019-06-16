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

  $fecha = $conf['A_ANO'] . '-';
  switch ($conf['A_MES']) {
    case "enero":
      $fecha .= "01";
      break;
    case "febrero":
      $fecha .= "02";
      break;
    case "marzo":
      $fecha .= "03";
      break;
    case "abril":
      $fecha .= "04";
      break;
    case "mayo":
      $fecha .= "05";
      break;
    case "junio":
      $fecha .= "06";
      break;
    case "julio":
      $fecha .= "07";
      break;
    case "agosto":
      $fecha .= "08";
      break;
    case "septiembre":
      $fecha .= "09";
      break;
    case "octubre":
      $fecha .= "10";
      break;
    case "noviembre":
      $fecha .= "11";
      break;
    case "diciembre":
      $fecha .= "12";
      break;
  }
  $fecha .= "-" . $conf['A_DIA'];
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
        <img src="../imgContingenciaAmbiental/logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Calidad del aire CUSur</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
            <input type="hidden" name="form" id="form" value="Aire">
            <div class="form-group">
              <label for="inputPM">PM</label>
              <input type="text" class="form-control" id="inputPM" value="<?php echo $conf['PM']; ?>" name="PM" aria-describedby="emailHelp" placeholder="Ingrese PM" required>
            </div>
            <div class="form-group">
              <label for="inputMCG">MCG/MT</label>
              <input type="text" class="form-control" id="inputMCG" value="<?php echo $conf['MCG']; ?>" name="MCG" placeholder="Ingrese MCG/MT" required>
            </div>
            <div class="form-group">
              <label for="inputCO">CO</label>
              <input type="text" class="form-control" id="inputCO" value="<?php echo $conf['CO']; ?>" name="CO" placeholder="Ingrese CO" required>
            </div>
            <div class="form-group">
              <label for="inputInformacion">Información para el usuario</label>
              <input type="text" class="form-control" id="inputInformacion" value="<?php echo $conf['A_INFO']; ?>" name="info" placeholder="Ingrese el enlace donde se encuentra la información para el usuario" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputFecha">Fecha de medición</label>
              <input type="date" class="form-control" id="inputFecha" value="<?php echo $fecha; ?>" name="Fecha" placeholder="Ingrese fecha de medición" required>
            </div>
            <div class="form-group">
              <label for="inputTime">Hora de medición</label>
              <input type="time" class="form-control" id="inputHora" value="<?php echo $conf['A_HORA']; ?>" name="Hora" placeholder="Ingrese hora de medición" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="menu.php" class="btn btn-primary">Regresar</a>
        </form>
      </div>

    </div>
  </body>
</html>
