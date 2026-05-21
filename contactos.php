<?php
include("includes/validar_sesion.php");

$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
$inicial = strtoupper(substr($usuario, 0, 1));

$mensaje_exito = "";
$mensaje_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $destino = "promotorasantacruz8@gmail.com";
    $titulo = "Nuevo mensaje desde la página AMIG-CHACO";

    $contenido = "
Nombre: $nombre
Correo: $correo
Celular: $celular
Asunto: $asunto

Mensaje:
$mensaje
";

    $headers = "From: $correo";

    if (mail($destino, $titulo, $contenido, $headers)) {
        $mensaje_exito = "Mensaje enviado correctamente al correo.";
    } else {
        $mensaje_error = "No se pudo enviar por correo. Puede usar WhatsApp.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contactos</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="img/logocole.jpeg" rel="shortcut icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
body, html{
    margin:0;
    height:100%;
    font-family:Arial;
}

.video-background{
    position:fixed;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-1;
}

.navbar{
    background:#004d40;
}

.nav-link, .navbar-brand{
    color:white !important;
    font-weight:bold;
}

.container-custom{
    margin-top:100px;
    margin-bottom:50px;
}

.contact-form{
    background:rgba(255,255,255,0.90);
    padding:30px;
    border-radius:15px;
    border:2px solid #004d40;
    color:#004d40;
    box-shadow:0 0 20px rgba(0,0,0,0.5);
}

.titulo{
    background:rgba(255,255,255,0.9);
    color:#004d40;
    padding:15px;
    border-radius:10px;
    text-align:center;
    border:2px solid #004d40;
}

.user-circle{
    width:42px;
    height:42px;
    border-radius:50%;
    border:none;
    background:#00ff99;
    color:black;
    font-weight:bold;
}

.btn-whatsapp{
    background:#25D366;
    color:white;
    font-weight:bold;
}

.btn-whatsapp:hover{
    background:#1ebe5d;
    color:white;
}
</style>
</head>

<body>

<video src="videos/pas.mp4" autoplay muted loop class="video-background"></video>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
<div class="container-fluid">

<a class="navbar-brand" href="index.php">
<img src="img/logocole.jpeg" style="width:45px;height:45px;border-radius:5px;">
 AMIG-CHACO
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
<li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
<li class="nav-item"><a class="nav-link" href="direccion.php">Dónde Estamos</a></li>
<li class="nav-item"><a class="nav-link active" href="contactos.php">Contactos</a></li>
<li class="nav-item"><a class="nav-link" href="rude.php">RUDE</a></li>
</ul>

<div class="dropdown">
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

<div class="container container-custom">

<h2 class="titulo">Contáctese con Nosotros</h2>

<div class="contact-form mt-4">

<?php if($mensaje_exito != "") { ?>
<div class="alert alert-success"><?php echo $mensaje_exito; ?></div>
<?php } ?>

<?php if($mensaje_error != "") { ?>
<div class="alert alert-danger"><?php echo $mensaje_error; ?></div>
<?php } ?>

<form method="POST" action="contactos.php">

<div class="row">

<div class="col-md-6">

<input type="text" name="nombre" placeholder="Ingrese su nombre" required class="form-control mb-3">

<input type="email" name="correo" placeholder="Ingrese su correo" required class="form-control mb-3">

<input type="tel" name="celular" placeholder="Ingrese su celular" required class="form-control mb-3">

<input type="text" name="asunto" placeholder="Asunto" required class="form-control mb-3">

<textarea name="mensaje" placeholder="Escriba su mensaje" required class="form-control mb-3" rows="4"></textarea>

<button type="submit" class="btn btn-success w-100">
<i class="fas fa-envelope"></i> Enviar correo
</button>

<button type="button" onclick="enviarWhatsApp()" class="btn btn-whatsapp w-100 mt-3">
<i class="fab fa-whatsapp"></i> Enviar por WhatsApp
</button>

</div>

<div class="col-md-6 text-center">

<h4>Unidad Educativa AMIG-CHACO</h4>

<p>
Puedes enviarnos sugerencias, consultas, quejas o pedir información mediante este formulario.
<br><br>
También puedes escribirnos directamente por WhatsApp con todos tus datos ya cargados.
</p>

<img src="img/1.png" class="img-fluid rounded" style="border:3px solid #004d40;">

</div>

</div>

</form>

</div>
</div>

<script>
function enviarWhatsApp(){

    let nombre = document.querySelector('[name="nombre"]').value;
    let correo = document.querySelector('[name="correo"]').value;
    let celular = document.querySelector('[name="celular"]').value;
    let asunto = document.querySelector('[name="asunto"]').value;
    let mensaje = document.querySelector('[name="mensaje"]').value;

    if(nombre == "" || correo == "" || celular == "" || asunto == "" || mensaje == ""){
        alert("Por favor llena todos los campos antes de enviar por WhatsApp.");
        return;
    }
let texto =
`================================
UNIDAD EDUCATIVA AMIG-CHACO
Sistema Web Escolar
================================

NUEVO MENSAJE DE CONTACTO

--------------------------------
DATOS DEL REMITENTE
--------------------------------

Nombre:
${nombre}

Correo electronico:
${correo}

Numero de celular:
${celular}

Asunto:
${asunto}

--------------------------------
MENSAJE
--------------------------------

${mensaje}

--------------------------------
Este mensaje fue enviado desde el formulario de contacto
de la pagina web de la Unidad Educativa AMIG-CHACO.
================================`;
    let numero = "59164477662";

    let url = "https://wa.me/" + numero + "?text=" + encodeURIComponent(texto);

    window.open(url, "_blank");
}
</script>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>