<?php
include("includes/validar_sesion.php");

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
<meta name="keywords" content="inicio con bootstrap">
<meta name="description" content="Página mejorada de inicio con Bootstrap 5">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Galería</title>

<link href="img/logocole.jpeg" type="image/x-icon" rel="shortcut icon">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilo2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body{
    background:url('img/fondo.jpg') no-repeat center center fixed;
    background-size:cover;
    font-family:Arial;
}

.navbar{
    background:#004d40;
}

.navbar-brand,
.nav-link{
    color:white !important;
    font-weight:bold;
}

.nav-link:hover{
    color:#00ff99 !important;
}

.titulo-seccion{
    background:#004d40;
    padding:20px;
    border-radius:15px;
    margin-top:90px;
    margin-bottom:25px;
}

.titulo-seccion div{
    background:white;
    color:#004d40;
    text-align:center;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 8px rgba(0,0,0,0.3);
}

.event-box{
    background:white;
    border:2px solid #004d40;
    border-radius:10px;
    color:#004d40;
    transition:0.3s;
}

.event-box:hover{
    transform:scale(1.03);
    box-shadow:0 0 15px #004d40;
}

.info-box{
    background:white;
    color:#004d40;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 8px rgba(0,0,0,0.3);
}

.img-evento{
    width:100%;
    border-radius:15px;
    box-shadow:0 4px 8px rgba(0,0,0,0.3);
    margin-top:20px;
}

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

footer{
    background:#004d40;
    color:white;
    margin-top:40px;
}

.btn-custom{
    background:white;
    border:2px solid #004d40;
    border-radius:10px;
    margin:5px;
    padding:10px 20px;
}

.btn-custom a{
    color:#004d40;
    text-decoration:none;
    font-weight:bold;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">
<div class="container-fluid">

<a class="navbar-brand d-flex align-items-center" href="index.php">
<img src="img/logocole.jpeg" style="width:50px;height:50px;border-radius:5px;border:2px solid #000;">
<span style="margin-left:10px;">Unidad Educativa AMIG-CHACO</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav me-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
<li class="nav-item"><a class="nav-link active" href="galeria.php">Galería</a></li>
<li class="nav-item"><a class="nav-link" href="direccion.php">Dónde Estamos</a></li>
<li class="nav-item"><a class="nav-link" href="contactos.php">Contactos</a></li>
<li class="nav-item"><a class="nav-link" href="rude.php">RUDE</a></li>
</ul>

<div class="dropdown ms-2">
<button class="user-circle" data-bs-toggle="dropdown">
<?php echo $inicial; ?>
</button>

<ul class="dropdown-menu dropdown-menu-end">
<li class="dropdown-item"><?php echo $usuario; ?></li>
<li class="dropdown-item">Rol: <?php echo $rol; ?></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
</ul>
</div>

</div>
</div>
</nav>

<header id="inicio">
<div class="container">

<div class="titulo-seccion">
<div>
<h1>LOS ACTOS CÍVICOS QUE SE CELEBRAN SON:</h1>
</div>
</div>

<div class="row text-dark mt-2 p-4">

<div class="col-md-6">

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Aniversario del Colegio</h6>
<p><strong>Fecha:</strong> 16 de septiembre.</p>
<p><strong>Descripción:</strong> Celebración con actividades especiales para conmemorar la fundación del colegio.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día de la Bandera</h6>
<p><strong>Fecha:</strong> 17 de agosto.</p>
<p><strong>Descripción:</strong> Actos solemnes para rendir homenaje a la bandera nacional de Bolivia.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día de la Independencia</h6>
<p><strong>Fecha:</strong> 6 de agosto.</p>
<p><strong>Descripción:</strong> Celebración que conmemora la independencia de Bolivia.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día del Maestro</h6>
<p><strong>Fecha:</strong> 6 de abril.</p>
<p><strong>Descripción:</strong> Eventos para reconocer la labor y dedicación de los maestros.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día del Estudiante</h6>
<p><strong>Fecha:</strong> 23 de abril.</p>
<p><strong>Descripción:</strong> Actividades para celebrar a los estudiantes.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día de la Madre</h6>
<p><strong>Fecha:</strong> Segundo domingo de mayo.</p>
<p><strong>Descripción:</strong> Celebraciones para honrar a las madres de los estudiantes.</p>
</div>

</div>

<div class="col-md-6">

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día del Padre</h6>
<p><strong>Fecha:</strong> Tercer domingo de marzo.</p>
<p><strong>Descripción:</strong> Eventos para reconocer la importancia de los padres.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día del Mar</h6>
<p><strong>Fecha:</strong> 23 de marzo.</p>
<p><strong>Descripción:</strong> Actos cívicos en memoria de la pérdida del acceso soberano al mar.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Aniversario de la Zona Villa Adela</h6>
<p><strong>Fecha:</strong> 17 de septiembre.</p>
<p><strong>Descripción:</strong> Celebración del aniversario de la zona con eventos comunitarios.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día del Escudo Nacional</h6>
<p><strong>Fecha:</strong> 12 de julio.</p>
<p><strong>Descripción:</strong> Ceremonias para rendir homenaje al escudo nacional de Bolivia.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día de la Bandera de la Zona Villa Adela</h6>
<p><strong>Fecha:</strong> 19 de diciembre.</p>
<p><strong>Descripción:</strong> Celebración de la bandera de la zona.</p>
</div>

<div class="event-box p-3 mb-3">
<h6 class="text-center text-success">Día de la Cultura</h6>
<p><strong>Fecha:</strong> 31 de agosto.</p>
<p><strong>Descripción:</strong> Celebración de la riqueza cultural de Bolivia.</p>
</div>

</div>
</div>
</div>
</header>

<main id="eventos-deportivos">

<div class="titulo-seccion container">
<div>
<h1>Eventos Deportivos</h1>
</div>
</div>

<div class="container mt-4">
<div class="row align-items-center">

<div class="col-md-6">
<div class="info-box">
<h1 class="display-4 text-center" style="font-size:2rem;">CAMPEONATOS</h1>
<p class="mt-3 text-justify">
Hacemos campeonatos en cada actividad cívica de la U.E. Participan estudiantes, padres de familia y otros colegios.
</p>
</div>
</div>

<div class="col-md-6">
<img src="img/campeo.jpeg" class="img-evento">
</div>

</div>
</div>

<div class="container mt-4">
<div class="row align-items-center">

<div class="col-md-6">
<img src="img/noche.jpg" class="img-evento">
</div>

<div class="col-md-6">
<div class="info-box">
<h1 class="display-4 text-center" style="font-size:2rem;">NOCHES DE GALA</h1>
<p class="mt-3 text-justify">
Tenemos noches de gala, mayormente en el aniversario del colegio, con grupos, juegos y actividades organizadas por la promoción.
</p>
</div>
</div>

</div>
</div>

<div class="container mt-4">
<div class="row align-items-center">

<div class="col-md-6">
<div class="info-box">
<h1 class="display-4 text-center" style="font-size:2rem;">BAILES</h1>
<p class="mt-3 text-justify">
Los bailes se realizan en actos cívicos, Día de la Madre, Día del Padre, Día del Estudiante y aniversario del colegio.
</p>
</div>
</div>

<div class="col-md-6">
<img src="img/tink.jpg" class="img-evento">
</div>

</div>
</div>

<div class="container mt-4">
<div class="row align-items-center">

<div class="col-md-6">
<img src="img/des.jpg" class="img-evento">
</div>

<div class="col-md-6">
<div class="info-box">
<h1 class="display-4 text-center" style="font-size:2rem;">DESFILES</h1>
<p class="mt-3 text-justify">
Los desfiles se realizan en aniversarios, Día de la Bandera y 6 de Agosto, demostrando la organización del colegio.
</p>
</div>
</div>

</div>
</div>

<div class="container text-center mt-4">
<button class="btn-custom">
<a href="index.php">Página Principal</a>
</button>

<button class="btn-custom">
<a href="#inicio">Inicio</a>
</button>

<button class="btn-custom">
<a href="#eventos-deportivos">Eventos Deportivos</a>
</button>
</div>

</main>

<footer class="text-light text-center py-3">
<div class="container d-flex justify-content-between align-items-center">

<div>
<h2 class="mb-2">COLEGIO "AMIG-CHACO"</h2>
<h5 class="mb-2">Teléfono: 591 4211255</h5>
<p class="mb-3">"Formando el futuro con educación de calidad"</p>
<p class="mb-0">©opyright &copy; COLEGIO "AMIG-CHACO" – LA PAZ – BOLIVIA – TODOS LOS DERECHOS RESERVADOS</p>
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
<script src="js/bootstrap.bundle.min.js"></script>

<script>
ScrollReveal().reveal(".navbar", {
    duration: 1800,
    origin: "bottom",
    distance: "80px"
});

ScrollReveal().reveal(".event-box", {
    duration: 1600,
    origin: "bottom",
    distance: "80px",
    interval: 150
});

ScrollReveal().reveal(".info-box", {
    duration: 1800,
    origin: "left",
    distance: "100px"
});

ScrollReveal().reveal(".img-evento", {
    duration: 1800,
    origin: "right",
    distance: "100px"
});
</script>

</body>
</html>