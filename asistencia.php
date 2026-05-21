<?php
include("includes/validar_sesion.php");

if ($_SESSION["rol"] != "profesor" &&
    $_SESSION["rol"] != "admin") {

    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Asistencia</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial;
}

.contenedor{
    padding:100px 30px;
    text-align:center;
}

.card-opcion{
    background:white;
    border-radius:20px;
    padding:50px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
}

.btn-verde{
    background:#004d40;
    color:white;
    padding:20px 60px;
    border-radius:15px;
    font-size:25px;
    margin:20px;
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
Sistema de Asistencia
</h1>

<div class="card-opcion mt-5">

<a href="asistencia_cursos.php?nivel=primaria"
class="btn btn-verde">

Primaria

</a>

<a href="asistencia_cursos.php?nivel=secundaria"
class="btn btn-verde">

Secundaria

</a>

</div>

</div>

</body>
</html>