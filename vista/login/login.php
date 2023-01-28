<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
    <!-- Fivecon -->
    <link rel="icon" type="imagen/x-icon" href="imagen/icono.svg">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Inicio de sesión</title>
</head>

<body>
    <!-- navbar --> 
    <!-- navbar --> 
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#"><i class="bi bi-journal-check icon-white"></i></a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../../index.php">Reporte de Asistencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Iniciar Sesión</a>
            </li>
          </ul>
       
           </div>
        </div>
    </nav>

    <!-- Formulario login -->
    <div class="login-content login d-flex justify-content-center align-items-center vh-100">
        <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 25rem"
    >
        
            <form method="POST" action="">
                <div class="one d-flex justify-content-center">
                <img
                 src="imagen/login-icon.svg"
                  alt="login-icon"
                 style="height: 7rem"
                 />
             </div>
                <?php
                include "../../modelo/conexion.php";
                include "../../controlador/login.php";
                ?> 
                <div class="input-group mt-4">
        <div class="input-group-text bg-dark">
          <img
            src="imagen/username-icon.svg"
            alt="username-icon"
            style="height: 1rem"
          />
        </div>
        <input
            id="usuario"
          class="input form-control bg-light"
          name="usuario"
          type="text"
          placeholder="Usuario"
          autocomplete="usuario"
        />
      </div>
      <div class=" div input-group mt-1">
        <div class="input-group-text bg-dark">
          <img
            src="imagen/password-icon.svg"
            alt="password-icon"
            style="height: 1rem"
          />
        </div>
        <input
          class="form-control bg-light input"
          type="password"
          id="input"
          name= "password"
          placeholder="Contraseña"
          autocomplete="current-password"
        />
      </div>

                <input name="btningresar" class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" title="click para ingresar" type="submit"
                    value="INICIAR SESION">
            </form>
    </div>
    </div>
  </body>
  <!-- Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
    <script src="js/fontawesome.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
