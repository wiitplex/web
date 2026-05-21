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
<title>NOSOTROS</title>

<link href="img/logocole.jpeg" type="image/x-icon" rel="shortcut icon">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body{
    background:url('img/papel.jpg') no-repeat center center fixed;
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

.section-title{
    background:#004d40;
    color:white;
    padding:20px;
    text-align:center;
    border-radius:10px;
    margin:30px 0;
}

.card-custom{
    background:white;
    border:2px solid #004d40;
    color:#004d40;
    border-radius:10px;
    padding:20px;
    height:100%;
    box-shadow:0 4px 8px rgba(0,0,0,0.2);
}

.card-custom:hover{
    transform:scale(1.03);
    transition:0.3s;
}

.green-box{
    background:#004d40;
    color:white;
    padding:25px;
    border-radius:10px;
}

.title-box{
    background:white;
    color:#004d40;
    padding:15px;
    border-radius:8px;
    border:2px solid #004d40;
    margin-bottom:20px;
}

.img-border{
    border:5px solid #004d40;
    border-radius:12px;
}

.staff-card img{
    height:220px;
    object-fit:cover;
    border:5px solid #004d40;
}

.staff-card .card-body{
    background:#004d40;
    color:white;
}

footer{
    background:#004d40;
    color:white;
    margin-top:40px;
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
<li class="nav-item"><a class="nav-link active" href="nosotros.php">Nosotros</a></li>
<li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
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

<header id="fundacion" style="margin-top:100px;">
<div class="container mt-5">
<div class="row">

<div class="col-md-6 d-flex align-items-center">
<img src="img/2.png" class="img-fluid img-border" alt="Colegio AMIG-CHACO">
</div>

<div class="col-md-6">
<div class="green-box">

<div class="title-box">
<h2 class="text-center mb-0">HISTORIA "AMIG-CHACO"</h2>
</div>

<div class="row">

<div class="col-md-4 mb-3">
<div class="card-custom">
<h4 class="text-center">Fundación</h4>
<p class="text-center">
El colegio nace con la misión de brindar educación de calidad y accesible para la comunidad educativa.
</p>
</div>
</div>

<div class="col-md-4 mb-3">
<div class="card-custom">
<h4 class="text-center">Crecimiento</h4>
<p class="text-center">
A lo largo de los años, la institución fue creciendo en infraestructura, programas académicos y servicios.
</p>
</div>
</div>

<div class="col-md-4 mb-3">
<div class="card-custom">
<h4 class="text-center">Contribución</h4>
<p class="text-center">
La unidad educativa participa activamente en actividades culturales, educativas y comunitarias.
</p>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
</header>

<main id="especialidades">

<div class="container">
<div class="section-title">
<h1>VISIÓN Y MISIÓN DE LA U.E</h1>
</div>
</div>

<div class="container mt-4">
<div class="row">

<div class="col-md-6 mb-4">
<div class="card-custom">
<h4 class="text-center">Misión</h4>
<ul>
<li>Brindar educación de alta calidad y accesible.</li>
<li>Promover el desarrollo integral de los estudiantes.</li>
<li>Fomentar un ambiente inclusivo y seguro.</li>
</ul>
</div>
</div>

<div class="col-md-6 mb-4">
<div class="card-custom">
<h4 class="text-center">Visión</h4>
<ul>
<li>Ser una institución educativa de referencia.</li>
<li>Innovar constantemente en métodos educativos.</li>
<li>Preparar estudiantes para los desafíos del futuro.</li>
</ul>
</div>
</div>

</div>
</div>

</main>

<section id="fundadores">

<div class="container">
<div class="section-title">
<h1>FUNDADORES DE LA U.E</h1>
</div>
</div>

<div class="container">
<div class="row">

<div class="col-sm-6 col-md-3 mb-4">
<div class="card staff-card">
<img src="img/pro1.jpeg" class="card-img-top" alt="Director">
<div class="card-body">
<p class="text-center">Lic. Fredy H. Director de nuestra hermosa Unidad Educativa AMIG-CHACO.</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-3 mb-4">
<div class="card staff-card">
<img src="img/pro2.jpg" class="card-img-top" alt="Regente">
<div class="card-body">
<p class="text-center">Don Ismael M. Regente de nuestra hermosa Unidad Educativa AMIG-CHACO.</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-3 mb-4">
<div class="card staff-card">
<img src="img/pro3.jpg" class="card-img-top" alt="Psicóloga">
<div class="card-body">
<p class="text-center">Lic. Belinda R. Psicóloga de nuestra hermosa Unidad Educativa AMIG-CHACO.</p>
</div>
</div>
</div>

<div class="col-sm-6 col-md-3 mb-4">
<div class="card staff-card">
<img src="img/pro4.jpg" class="card-img-top" alt="Secretaria">
<div class="card-body">
<p class="text-center">Lic. Ruth N. Secretaria de nuestra hermosa Unidad Educativa AMIG-CHACO.</p>
</div>
</div>
</div>

</div>
</div>

</section>

<section id="promocion">

<div class="container">
<div class="section-title">
<h1>Promoción</h1>
</div>
</div>

<div class="container">

<div class="row justify-content-center">
<div class="col-md-8 text-center">
<img src="img/prom.jpg" class="img-fluid img-border" style="max-width:800px;margin:20px 0;">
</div>
</div>

<div class="row">

<div class="col-md-4 mb-4">
<div class="card-custom">
<h4 class="text-center">Premios</h4>
<ul>
<li>Premio al Mejor Proyecto en Tecnología Educativa.</li>
<li>Reconocimiento por Innovación en Métodos de Enseñanza.</li>
<li>Premio a la Excelencia Académica.</li>
</ul>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card-custom">
<h4 class="text-center">Eventos</h4>
<ul>
<li>Feria de Ciencia y Tecnología anual.</li>
<li>Semana Cultural con actividades artísticas y deportivas.</li>
<li>Eventos comunitarios y de recaudación de fondos.</li>
</ul>
</div>
</div>

<div class="col-md-4 mb-4">
<div class="card-custom">
<h4 class="text-center">Actividades</h4>
<ul>
<li>Programas de mentoría y desarrollo profesional.</li>
<li>Clubes académicos y actividades extracurriculares.</li>
<li>Actividades para fortalecer habilidades personales.</li>
</ul>
</div>
</div>

</div>
</div>

</section>

<footer class="text-white text-center py-3">
<div class="container d-flex justify-content-between align-items-center">

<div class="text-left">
<h2 class="mb-2">COLEGIO "AMIG-CHACO"</h2>
<h5 class="mb-2">Teléfono: 591 4211255</h5>
<p class="mb-3">"Formando el futuro con educación de calidad"</p>
<p class="mb-0">©opyright &copy; COLEGIO "AMIG-CHACO" – LA PAZ – BOLIVIA – TODOS LOS DERECHOS RESERVADOS</p>
</div>

<div class="d-flex mt-3">
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
ScrollReveal().reveal('.navbar', {
duration: 1800,
origin: 'bottom',
distance: '80px'
});

ScrollReveal().reveal('.green-box', {
duration: 1600,
origin: 'right',
distance: '100px'
});

ScrollReveal().reveal('.card-custom', {
duration: 1600,
origin: 'bottom',
distance: '80px',
interval: 150
});

ScrollReveal().reveal('.staff-card', {
duration: 1600,
origin: 'right',
distance: '100px',
interval: 150
});
</script>

<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function(e) {
e.preventDefault();
document.querySelector(this.getAttribute('href')).scrollIntoView({
behavior: 'smooth'
});
});
});
</script>

</body>
</html>