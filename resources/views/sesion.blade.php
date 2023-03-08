
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sistema de Gestión Unificado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Fontawesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
  <form action={{ route('login') }}   method="post">
    @method('get')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height:100vh">
          <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10">
            <div class="card">
              <div class="card-header text-center">
                <h4>Sistema de Gestión Unificado</h4>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="email"><i class="fas fa-user"></i> Correo:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese su correo">
                  </div>
                  <div class="form-group">
                    <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </form>
</body>
</html>
