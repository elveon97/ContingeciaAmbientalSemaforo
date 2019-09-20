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
    <title>Huracanes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <img src="logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row">
        <h2 style="margin-top: 40px;">Medición de huracanes CUSur</h2>
        <hr>
        <form action="actualizarConf.php" method="post">
          <input type="hidden" name="form" id="form" value="Huracanes">
            <div class="form-group">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" id="inputNombre" value="<?php echo $conf['NOMBRE']; ?>" name="Nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre del huracán" required>
            </div>
            <div class="form-group">
              <label for="inputCategoria">Categoría</label>
              <select class="form-control" name="Categoria">
                <option value="1" <?php if ($conf["CATEGORIA"] == "1") echo "selected='selected'"; ?>>1</option>
                <option value="2" <?php if ($conf["CATEGORIA"] == "2") echo "selected='selected'"; ?>>2</option>
                <option value="3" <?php if ($conf["CATEGORIA"] == "3") echo "selected='selected'"; ?>>3</option>
                <option value="4" <?php if ($conf["CATEGORIA"] == "4") echo "selected='selected'"; ?>>4</option>
                <option value="5" <?php if ($conf["CATEGORIA"] == "5") echo "selected='selected'"; ?>>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputSemaforo">Semáforo</label>
              <select class="form-control" name="Semaforo">
                <option value="1" <?php if ($conf["SEMAFORO"] == "1") echo "selected='selected'"; ?>>1 - Azul</option>
                <option value="2" <?php if ($conf["SEMAFORO"] == "2") echo "selected='selected'"; ?>>2 - Verde</option>
                <option value="3" <?php if ($conf["SEMAFORO"] == "3") echo "selected='selected'"; ?>>3 - Amarillo</option>
                <option value="4" <?php if ($conf["SEMAFORO"] == "4") echo "selected='selected'"; ?>>4 - Naranja</option>
                <option value="5" <?php if ($conf["SEMAFORO"] == "5") echo "selected='selected'"; ?>>5 - Rojo</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputUbicacion">Ubicación</label>
              <input type="text" class="form-control" id="inputUbicacion" value="<?php echo $conf['UBICACION']; ?>" name="Ubicacion" placeholder="Ingrese ubicación" required>
            </div>
            <div class="form-group">
              <label for="inputRachas">Rachas de viento (km/hr)</label>
              <input type="number" class="form-control" id="inputRachas" value="<?php echo $conf['RACHAS']; ?>" name="Rachas" placeholder="Ingrese rachas de viento en km/hr" required>
            </div>
            <div class="form-group">
              <label for="inputM2">m²</label>
              <input type="number" class="form-control" id="inputM2" value="<?php echo $conf['M2']; ?>" name="M2" placeholder="Ingrese m²" required>
            </div>
            <div class="form-group">
              <label for="inputValoracion">Valoración</label>
              <input type="text" class="form-control" id="inputValoracion" value="<?php echo $conf['H_VAL']; ?>" name="Valoracion" placeholder="Ingrese valoración" required>
            </div>
            <div class="form-group">
              <label for="inputInfo">Enlace para el usuario</label>
              <input type="text" class="form-control" id="inputInfo" name="info" value="<?php echo $conf['H_INFO']; ?>" placeholder="Ingrese el enlace donde se encuentra la información para el usuario" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputFecha">Fecha de publicación</label>
              <input type="date" class="form-control" id="inputFecha" name="Fecha" value="<?php echo $conf['H_FECHA_RAW']; ?>" placeholder="Ingrese fecha de medición" required>
            </div>
            <div class="form-group">
              <label for="inputTime">Hora de publicación</label>
              <input type="time" class="form-control" id="inputHora" name="Hora" value="<?php echo $conf['H_HORA']; ?>" placeholder="Ingrese hora de medición" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="menu.php" class="btn btn-primary">Regresar</a>
        </form>
      </div>

    </div>
  </body>
</html>
