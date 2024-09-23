<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "<p style='color:red;'>Usuario o contraseña incorrectos.</p>";
    } elseif ($_GET['error'] == 2) {
        echo "<p style='color:red;'>Por favor, completa todos los campos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href='logo.png' rel='icon' type='image/x-icon'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            background: linear-gradient(135deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
            <p class="text-white-50 mb-5">Por favor ingrese su Usuario y Contraseña</p>
            
            <form action="login_consulta.php" method="post">
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="nombre" placeholder="Usuario" required>
              </div>

            

              <div class="form-group mb-4">
                <input type="password" id="typePasswordX" class="form-control" name="contra" placeholder="Contraseña" required>
              </div>

              <button type="submit" class="btn btn-primary btn-lg btn-block" name="loging">Iniciar Sesión</button>
            </form>

            <hr class="my-4">

            <!-- Botón para redirigir al registro -->
            <button class="btn btn-light btn-lg btn-block" onclick="window.location.href='registro_datos.php'">Registrarse</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
