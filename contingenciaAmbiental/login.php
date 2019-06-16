<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login calidad de aire CUSur</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <img src="logo.jpg" alt="" style="width: 380px; height: 82px;">
      </div>
      <div class="row justify-content-center align-items-center" style="height:80vh">
        <div class="col-4">
            <div class="card">
              <div class="card-header">
                <h3>Contingencia ambiental CUSur</h3>
              </div>
              <div class="card-body">
                <form action="handleSesion.php" method="post" autocomplete="off">
                  <div class="form-group mb-4">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" id="user">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="pass">
                  </div>
                  <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                  <br>
                  <label for="" class="text-danger">
                    <?php
                      if (isset($_GET['error'])) {
                        echo "Nombre de usuario y/o contraseña incorrectos";
                      }
                    ?>
                  </label>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
