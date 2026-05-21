<?php
include("includes/validar_sesion.php");

$nivel = $_GET["nivel"];
?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Cursos</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial;
}

.contenedor{
    padding:80px 30px;
    text-align:center;
}

.card{
    border:none;
    border-radius:15px;
    padding:30px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
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

<div class="contenedor">

<h1 style="color:#004d40;">

Cursos de <?php echo ucfirst($nivel); ?>

</h1>

<div class="row mt-5">

<?php
for($i=1; $i<=6; $i++){
?>

<div class="col-md-4 mb-4">

<div class="card">

<h3>

<?php echo $i; ?>° "A"

</h3>

<a href="asistencia_lista.php?curso=<?php echo $i; ?>&nivel=<?php echo $nivel; ?>"
class="btn btn-verde w-100 mt-3">

Llamar Asistencia

</a>

<a href="asistencia_reporte.php?curso=<?php echo $i; ?>&nivel=<?php echo $nivel; ?>"
class="btn btn-outline-success w-100 mt-2">

Ver Reporte

</a>

</div>

</div>

<?php } ?>

</div>

</div>

</body>
</html>