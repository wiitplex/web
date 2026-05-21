<?php
include("includes/validar_sesion.php");
include("includes/conexion.php");

$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
$inicial = strtoupper(substr($usuario, 0, 1));

$comunicados = mysqli_query($conn, "
    SELECT *
    FROM comunicados
    WHERE fecha_subida >= DATE_SUB(NOW(), INTERVAL 5 DAY)
    ORDER BY fecha_subida DESC
");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Comunicados</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="img/logocole.jpeg" rel="shortcut icon">

<style>
body{
    background:#f5f5f5;
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

.user-circle{
    width:42px;
    height:42px;
    border-radius:50%;
    border:none;
    background:#00ff99;
    color:black;
    font-weight:bold;
}

.contenedor{
    padding:110px 40px 40px;
}

.titulo{
    background:#004d40;
    color:white;
    padding:25px;
    border-radius:15px;
    text-align:center;
    margin-bottom:30px;
}

.card-comunicado{
    background:white;
    border:2px solid #004d40;
    border-radius:15px;
    padding:20px;
    margin-bottom:30px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

.card-comunicado h3{
    color:#004d40;
}

iframe{
    width:100%;
    height:500px;
    border:2px solid #004d40;
    border-radius:10px;
}

.btn-verde{
    background:#004d40;
    color:white;
}

.btn-verde:hover{
    background:#00796b;
    color:white;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">
<div class="container-fluid">

<a class="navbar-brand d-flex align-items-center" href="index.php">
<img src="img/logocole.jpeg" style="width:50px;height:50px;border-radius:5px;">
<span style="margin-left:10px;">Unidad Educativa AMIG-CHACO</span>
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
<li class="nav-item"><a class="nav-link" href="contactos.php">Contactos</a></li>
<li class="nav-item"><a class="nav-link" href="rude.php">RUDE</a></li>
<li class="nav-item"><a class="nav-link" href="uniforme.php">Uniforme</a></li>
<li class="nav-item"><a class="nav-link active" href="comunicados.php">Comunicados</a></li>
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

<div class="contenedor">

<div class="titulo">
<h1>Comunicados Oficiales</h1>
<p>Los comunicados estarán visibles durante 5 días.</p>
</div>

<div class="row">

<?php while($c = mysqli_fetch_assoc($comunicados)){ 

$rutaPDF = "uploads/comunicados/" . $c["archivo"];

?>

<div class="col-md-6">
<div class="card-comunicado">

<h3><?php echo $c["titulo"]; ?></h3>

<p>
<strong>Fecha de publicación:</strong>
<?php echo date("d/m/Y H:i", strtotime($c["fecha_subida"])); ?>
</p>

<iframe src="<?php echo $rutaPDF; ?>"></iframe>

<a href="<?php echo $rutaPDF; ?>" download class="btn btn-verde w-100 mt-3">
Descargar comunicado
</a>

</div>
</div>

<?php } ?>

</div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>