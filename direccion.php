<?php
include("includes/validar_sesion.php");

$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
$inicial = strtoupper(substr($usuario,0,1));
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dirección</title>

<link href="img/logocole.jpeg" type="image/x-icon" rel="shortcut icon">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>

body{
    margin:0;
    padding:0;
    overflow-x:hidden;
    font-family:Arial;
    color:white;
}

/* VIDEO */

.video-fondo{
    position:fixed;
    right:0;
    bottom:0;
    min-width:100%;
    min-height:100%;
    object-fit:cover;
    z-index:-1;
}

/* CONTENIDO */

.content{
    position:relative;
    z-index:2;
}

/* NAVBAR */

.navbar{
    background:#004d40;
}

.navbar-brand,
.nav-link{
    color:white !important;
    font-weight:bold;
}

/* TITULO */

.header-title{
    background:rgba(0,0,0,0.6);
    padding:20px;
    border-radius:10px;
    margin-top:40px;
    text-align:center;
}

/* MAPA */

.map-container iframe{
    width:100%;
    height:600px;
    border-radius:15px;
    border:5px solid #00ff99;
    box-shadow:0 0 20px black;
}

/* FOOTER */

footer{
    background:#004d40;
    margin-top:40px;
}

/* USUARIO */

.user-circle{
    width:42px;
    height:42px;
    border-radius:50%;
    border:none;
    background:#00ff99;
    color:black;
    font-weight:bold;
    box-shadow:0 0 10px #00ff99;
}

.dropdown-menu{
    z-index:3000;
}

</style>

</head>

<body>

<!-- VIDEO -->

<video autoplay muted loop class="video-fondo">

    <source src="videos/pas.mp4" type="video/mp4">

</video>

<div class="content">

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-light">

<div class="container-fluid">

<a class="navbar-brand d-flex align-items-center"
href="index.php">

<img src="img/logocole.jpeg"
style="width:50px;height:50px;border-radius:5px;">

<span style="margin-left:10px;">
U.E AMIG-CHACO
</span>

</a>

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">

<li class="nav-item">
<a class="nav-link" href="index.php">
Inicio
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="nosotros.php">
Nosotros
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="galeria.php">
Galería
</a>
</li>

<li class="nav-item">
<a class="nav-link active"
href="direccion.php">
Dónde Estamos
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contactos.php">
Contactos
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="rude.php">
RUDE
</a>
</li>

</ul>

<!-- USUARIO -->

<div class="dropdown ms-2">

<button class="user-circle"
data-bs-toggle="dropdown">

<?php echo $inicial; ?>

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
<a class="dropdown-item"
href="logout.php">

Cerrar sesión

</a>
</li>

</ul>

</div>

<form class="d-flex ms-3">

<input class="form-control me-2"
type="search"
placeholder="Buscar">

<button class="btn btn-dark"
type="submit">

Buscar

</button>

</form>

</div>
</div>
</nav>

<!-- CONTENIDO -->

<header>

<div class="container">

<div class="header-title">

<h1>
NUESTRA DIRECCIÓN
DE LA UNIDAD EDUCATIVA
</h1>

</div>

<div class="container text-center mt-4 map-container">

<iframe
src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3501.301311330596!2d-68.20372549999999!3d-16.524344799999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edef7742ef6ff%3A0x319018727af63fc!2sAMIG%20Chaco!5e1!3m2!1ses!2sbo!4v1725430182196!5m2!1ses!2sbo"
allowfullscreen=""
loading="lazy">

</iframe>

</div>

</div>

</header>

<!-- FOOTER -->

<footer class="text-light text-center py-3">

<div class="container d-flex justify-content-between align-items-center">

<div>

<h2>
COLEGIO "AMIG-CHACO"
</h2>

<h5>
Teléfono: 591 4211255
</h5>

<p>
"Formando el futuro con educación de calidad"
</p>

<p>
©opyright &copy;
COLEGIO "AMIG-CHACO"
LA PAZ - BOLIVIA
</p>

</div>

<div class="mt-3">

<a href="https://facebook.com"
class="btn btn-outline-light btn-sm mx-1">

<i class="fab fa-facebook-f"></i>

</a>

<a href="https://youtube.com"
class="btn btn-outline-light btn-sm mx-1">

<i class="fab fa-youtube"></i>

</a>

<a href="https://instagram.com"
class="btn btn-outline-light btn-sm mx-1">

<i class="fab fa-instagram"></i>

</a>

</div>

</div>

</footer>

</div>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/scrollreveal"></script>

<script>

ScrollReveal().reveal('.navbar',{
    duration:2000,
    origin:'top',
    distance:'100px'
});

ScrollReveal().reveal('.header-title',{
    duration:2000,
    origin:'left',
    distance:'200px'
});

ScrollReveal().reveal('.map-container',{
    duration:2000,
    origin:'bottom',
    distance:'200px'
});

</script>

</body>
</html>