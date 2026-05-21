<?php

include("includes/validar_sesion.php");
include("includes/conexion.php");

$curso = $_GET["curso"];
$nivel = $_GET["nivel"];

$mensaje = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $fecha = $_POST["fecha"];

    foreach($_POST["estado"] as $id=>$estado){

        $verificar = mysqli_query($conn,"
        SELECT * FROM asistencias
        WHERE estudiante_id='$id'
        AND fecha='$fecha'
        ");

        if(mysqli_num_rows($verificar)>0){

            mysqli_query($conn,"
            UPDATE asistencias
            SET estado='$estado'
            WHERE estudiante_id='$id'
            AND fecha='$fecha'
            ");

        }else{

            mysqli_query($conn,"
            INSERT INTO asistencias
            (estudiante_id,fecha,estado)
            VALUES
            ('$id','$fecha','$estado')
            ");
        }
    }

    $mensaje = "Asistencia guardada correctamente.";
}

$estudiantes = mysqli_query($conn,"
SELECT *
FROM estudiantes
WHERE nivel='$nivel'
AND curso='$curso'
AND paralelo='A'
ORDER BY ap_paterno ASC,
ap_materno ASC,
nombre ASC
");

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Lista Asistencia</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial;
}

.contenedor{
    padding:50px 30px;
}

.titulo{
    background:#004d40;
    color:white;
    padding:20px;
    border-radius:15px;
    text-align:center;
    margin-bottom:30px;
}

.tabla{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

.btn-verde{
    background:#004d40;
    color:white;
    border:none;
}

.btn-verde:hover{
    background:#00796b;
    color:white;
}

</style>

</head>

<body>

<div class="contenedor">

<div class="titulo">

<h1>

<?php echo ucfirst($nivel); ?>

<?php echo $curso; ?>° "A"

</h1>

</div>

<?php if($mensaje!=""){ ?>

<div class="alert alert-success">

<?php echo $mensaje; ?>

</div>

<?php } ?>

<form method="POST">

<label><strong>Fecha:</strong></label>

<input type="date"
name="fecha"
class="form-control mb-4"
value="<?php echo date('Y-m-d'); ?>"
required>

<div class="tabla">

<table class="table table-bordered table-striped">

<thead class="table-success">

<tr>

<th>N°</th>
<th>Paterno</th>
<th>Materno</th>
<th>Nombre</th>
<th>Estado</th>

</tr>

</thead>

<tbody>

<?php

$n=1;

while($e=mysqli_fetch_assoc($estudiantes)){

?>

<tr>

<td><?php echo $n++; ?></td>

<td><?php echo $e["ap_paterno"]; ?></td>

<td><?php echo $e["ap_materno"]; ?></td>

<td><?php echo $e["nombre"]; ?></td>

<td>

<select
name="estado[<?php echo $e["id"]; ?>]"
class="form-control">

<option value="P">
P - Presente
</option>

<option value="A">
A - Ausente
</option>

<option value="Pr">
Pr - Permiso
</option>

</select>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<button class="btn btn-verde w-100 mt-4">

Guardar Asistencia

</button>

</form>

</div>

</body>
</html>