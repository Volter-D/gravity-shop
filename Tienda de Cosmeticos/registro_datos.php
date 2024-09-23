<?php
    session_start();
    if(isset($_SESSION['nobre'])){
        header("Location: inicio.php");
    }
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href='logo.png' rel='icon' type='image/x-icon'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h2 class="fw-bold mb-2 text-uppercase">Registrarse</h2>
            <p class="text-white-50 mb-5">Complete los campos para crear su cuenta</p>
            
            <form action="registro.php" method="post">
              <div class="form-group mb-3">
                <input type="text" class="form-control" name="nombre" placeholder="Usuario" required>
              </div>

              <div class="form-group mb-3">
                <input type="email" class="form-control" name="correo" placeholder="Correo" required>
              </div>

              <div class="form-group mb-4">
                <input type="password" id="typePasswordX" class="form-control" name="contra" placeholder="Contraseña" required>
              </div>

              <button type="submit" class="btn btn-primary btn-lg btn-block" name="registro">Registrarse</button>
            </form>

            <hr class="my-4">

            <!-- Botón para volver a inicio de sesión -->
            <button class="btn btn-light btn-lg btn-block" onclick="window.location.href='login.php'">Volver al Inicio de Sesión</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!--<form action="registro.php" method="post"> 
    <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Usuario" required>
    </div>
    <br>
    <div class="form-group">
        <input type="email" class="form-control" name="correo" placeholder="Correo" required>
    </div>
    <br>
    <div class="form-group">
        <input type="password" class="form-control" name="contra" placeholder="Contraseña" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="registro">Registrarse</button>
</form>-->





    
</body>
</html>