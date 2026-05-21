<?php

include("includes/validar_sesion.php");
include("includes/conexion.php");

$curso = $_GET["curso"];
$nivel = $_GET["nivel"];

$mes = isset($_GET["mes"])
? $_GET["mes"]
: date("Y-m");

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
<title>Reporte</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
    font-family:Arial;
}

.contenedor{
    padding:50px 20px;
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
    overflow:auto;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

.P{
    color:green;
    font-weight:bold;
}

.A{
    color:red;
    font-weight:bold;
}

.Pr{
    color:orange;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="contenedor">

<div class="titulo">

<h1>

Reporte Mensual

</h1>

<h3>

<?php echo ucfirst($nivel); ?>

<?php echo $curso; ?>° "A"

</h3>

</div>

<form method="GET" class="mb-4">

<input type="hidden"
name="curso"
value="<?php echo $curso; ?>">

<input type="hidden"
name="nivel"
value="<?php echo $nivel; ?>">

<label><strong>Seleccionar Mes:</strong></label>

<input type="month"
name="mes"
class="form-control mb-2"
value="<?php echo $mes; ?>">

<button class="btn btn-success">

Ver Reporte

</button>

</form>

<div class="tabla">

<table class="table table-bordered text-center">

<thead class="table-success">

<tr>

<th>Estudiante</th>

<?php

$dias = date("t", strtotime($mes));

for($i=1;$i<=$dias;$i++){

echo "<th>$i</th>";

}

?>

</tr>

</thead>

<tbody>

<?php while($e=mysqli_fetch_assoc($estudiantes)){ ?>

<tr>

<td>

<?php

echo $e["ap_paterno"]." ".
     $e["ap_materno"]." ".
     $e["nombre"];

?>

</td>

<?php

for($i=1;$i<=$dias;$i++){

$dia = str_pad($i,2,"0",STR_PAD_LEFT);

$fecha = $mes."-".$dia;

$q = mysqli_query($conn,"
SELECT estado
FROM asistencias
WHERE estudiante_id='".$e["id"]."'
AND fecha='$fecha'
");

if(mysqli_num_rows($q)>0){

$a=mysqli_fetch_assoc($q);

echo "<td class='".$a["estado"]."'>".$a["estado"]."</td>";

}else{

echo "<td>-</td>";

}

}

?>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</body>
</html>