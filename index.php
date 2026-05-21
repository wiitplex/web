<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
$inicial = strtoupper(substr($usuario, 0, 1));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ing. Carlos Saavedra">
    <meta name="KEYWORDS" content="inicio con bootstrap">
    <meta name="description" content="pagina mejorada de inicio con bootstrap 5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>

    <link href="img/logocole.jpeg" type="image/x-icon" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">

      <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="img/logocole.jpeg" alt="Logo" style="width: 50px; height: 50px; border-radius: 5px; border: 2px solid #000;">
          <span style="margin-left: 10px; font-weight: bold; color: #ffffff; font-size: 1.2rem;">
              Unidad Educativa AMIG-CHACO
          </span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                  <a class="nav-link" href="nosotros.php">Nosotros</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link active" href="galeria.php">Galería</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="direccion.php">Dónde Estamos</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="contactos.php">Contactos</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="rude.php">RUDE</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="uniforme.php">Uniforme</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="comunicados.php">Comunicados</a>
              </li>
              <?php if ($_SESSION["rol"] == "profesor" || $_SESSION["rol"] == "admin") { ?>

                <li class="nav-item">

                <a class="nav-link" href="asistencia.php">

                Asistencia

                </a>

                </li>

                <?php } ?>
                <?php if ($_SESSION["rol"] == "admin") { ?>

                <li class="nav-item">
                    <a class="nav-link" href="admin/dashboard.php">
                        Panel Admin
                    </a>
                </li>

                <?php } ?>

          </ul>

          <div class="dropdown ms-2">

              <button class="btn"
              style="background:#00ff99; border-radius:50%; width:40px; height:40px;"
              data-bs-toggle="dropdown">

                  <span style="font-weight:bold;">
                      <?php echo $inicial; ?>
                  </span>

              </button>

              <ul class="dropdown-menu dropdown-menu-end">

                  <li class="dropdown-item">
                      <?php echo $usuario; ?>
                  </li>

                  <li class="dropdown-item">
                      Rol: <?php echo $rol; ?>
                  </li>

                  <li><hr class="dropdown-divider"></li>

                  <li>
                      <a class="dropdown-item" href="logout.php">
                          Cerrar sesión
                      </a>
                  </li>

              </ul>

          </div>

          <form class="d-flex ms-3">
              <input class="form-control me-2 border-0 rounded-pill" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-dark text-light rounded-pill" type="submit">Buscar</button>
          </form>

      </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/1.png" class="d-block w-100 carousel-img">
      <div class="carousel-caption custom-caption">
        <h1>U.E "AMIG-CHACO"</h1>
        <p>Formando el futuro con educación de calidad</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100 carousel-img">
      <div class="carousel-caption custom-caption">
        <h5>Entrada Principal</h5>
        <p>Bienvenidos a nuestra institución</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100 carousel-img">
      <div class="carousel-caption custom-caption">
        <h5>Actividades Escolares</h5>
        <p>Aprendizaje y diversión</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

<div class="jumbotron jumbotron-fluid mt-4 p-4" style="background-color: #004d40; color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
  <div class="container text-center">
      <h2 class="display-5" style="font-family: 'Georgia', serif; font-weight: 600;">Unidad Educativa AMIG-CHACO</h2>
      <p class="lead" style="font-family: 'Arial', sans-serif; font-size: 1.2rem;">
          Formamos a nuestros estudiantes con excelencia y dedicación.
      </p>
  </div>
</div>

<div class="container-fluid mt-4">
  <div class="row text-center">

      <div class="col-md-4 mb-4">
          <div class="card border-success shadow-sm">
              <div class="card-img-container">
                  <img src="img/port.jpg" class="card-img" alt="Nuestra Galería">
              </div>
              <div class="card-body">
                  <h5 class="card-title">NUESTRA GALERÍA</h5>
                  <p class="card-text">
                      Acá encontrarás imágenes de nuestra unidad educativa, actos cívicos y fiestas.
                  </p>
                  <a href="galeria.php" class="btn btn-warning">¿Quieres saber más?</a>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card border-success shadow-sm">
              <div class="card-img-container">
                  <img src="img/relojj.jpg" class="card-img" alt="Horario de Atención">
              </div>
              <div class="card-body">
                  <h5 class="card-title">HORARIO DE ATENCIÓN</h5>
                  <p class="card-text">
                      Los días Lunes a Viernes de horas 08:00 a 12:20 de la mañana y los días Sábados de 8:00 a 11:00 am.
                  </p>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-4">
          <div class="card border-success shadow-sm">
              <div class="card-img-container">
                  <img src="img/gps.png" class="card-img" alt="Nuestra Dirección">
              </div>
              <div class="card-body">
                  <h5 class="card-title">NUESTRA DIRECCIÓN</h5>
                  <p class="card-text">
                      Para su mayor comodidad nos encontramos en la Zona Amig-Chaco, plaza redonda.
                  </p>
                  <a href="direccion.php" class="btn btn-warning">¿Quieres saber más?</a>
              </div>
          </div>
      </div>

  </div>
</div>

<footer class="bg-dark-green text-light text-center py-3">
  <div class="container d-flex justify-content-between align-items-center">

      <div>
          <h2 class="mb-2">COLEGIO "AMIG-CHACO"</h2>
          <h5 class="mb-2">Teléfono: 591 4211255</h5>
          <p class="mb-3">"Formando el futuro con educación de calidad"</p>
          <p class="mb-0">
              ©opyright &copy; COLEGIO "AMIG-CHACO" – LA PAZ – BOLIVIA – TODOS LOS DERECHOS RESERVADOS
          </p>
      </div>

      <div class="mt-3">
          <a href="https://www.facebook.com" class="btn btn-outline-light btn-sm mx-1">
              <i class="fab fa-facebook-f"></i>
          </a>

          <a href="https://www.youtube.com" class="btn btn-outline-light btn-sm mx-1">
              <i class="fab fa-youtube"></i>
          </a>

          <a href="https://www.instagram.com" class="btn btn-outline-light btn-sm mx-1">
              <i class="fab fa-instagram"></i>
          </a>
      </div>

  </div>
</footer>

<script src="https://unpkg.com/scrollreveal"></script>

<script>
ScrollReveal().reveal('.navbar', {
    duration: 2000,
    origin: 'bottom',
    distance: '300px'
});

ScrollReveal().reveal('.carousel', {
    duration: 2000,
    origin: 'right',
    distance: '300px'
});

ScrollReveal().reveal('.card', {
    duration: 2000,
    origin: 'bottom',
    distance: '300px',
    interval: 200
});

ScrollReveal().reveal('.btn-warning', {
    duration: 2000,
    origin: 'bottom',
    distance: '100px'
});
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>