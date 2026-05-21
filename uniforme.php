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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Uniformes</title>

<link href="img/logocole.jpeg" rel="shortcut icon">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f5f5f5;
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

.nav-link:hover{
    color:#00ff99 !important;
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

/* CONTENEDOR */

.contenedor{
    padding:120px 40px 40px;
}

.titulo{
    text-align:center;
    margin-bottom:40px;
}

.titulo h1{
    color:#004d40;
    font-size:45px;
}

.titulo p{
    color:#555;
    font-size:18px;
}

/* CARDS */

.cards{
    display:flex;
    gap:30px;
    flex-wrap:wrap;
    justify-content:center;
}

.card-uniforme{
    width:400px;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
    transition:0.3s;
}

.card-uniforme:hover{
    transform:translateY(-10px);
}

.card-uniforme img{
    width:100%;
    height:300px;
    object-fit:cover;
}

.contenido{
    padding:20px;
}

.contenido h2{
    color:#004d40;
}

.texto{
    color:#666;
}

.proveedores{
    margin-top:20px;
}

.proveedores button{
    padding:12px 20px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    margin-right:10px;
    font-weight:bold;
    transition:0.3s;
}

.proveedores button:first-child{
    background:#00c853;
    color:white;
}

.proveedores button:last-child{
    background:#004d40;
    color:white;
}

.proveedores button:hover{
    transform:scale(1.05);
}

/* MODAL */

.modal{
    display:none;
    position:fixed;
    z-index:5000;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    justify-content:center;
    align-items:center;
}

.modal-content{
    background:white;
    width:500px;
    max-width:95%;
    padding:30px;
    border-radius:15px;
    position:relative;
}

.cerrar{
    position:absolute;
    top:10px;
    right:20px;
    font-size:30px;
    cursor:pointer;
}

.precios{
    display:flex;
    justify-content:space-between;
    margin:20px 0;
}

.precios div{
    background:#004d40;
    color:white;
    padding:15px;
    border-radius:10px;
    width:30%;
    text-align:center;
}

select,
input{
    width:100%;
    padding:12px;
    margin-top:10px;
    margin-bottom:20px;
    border:2px solid #004d40;
    border-radius:8px;
}

.comprar{
    width:100%;
    padding:14px;
    border:none;
    background:#00c853;
    color:white;
    font-size:18px;
    border-radius:10px;
    cursor:pointer;
}

/* CARRITO */

.carrito{
    position:fixed;
    right:20px;
    bottom:20px;
    width:320px;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 0 20px rgba(0,0,0,0.3);
    z-index:4000;
}

.carrito h2{
    color:#004d40;
}

.carrito button{
    width:100%;
    padding:12px;
    border:none;
    background:#004d40;
    color:white;
    border-radius:10px;
    margin-top:10px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg fixed-top">

<div class="container-fluid">

<a class="navbar-brand d-flex align-items-center"
href="index.php">

<img src="img/logocole.jpeg"
style="width:50px;height:50px;border-radius:5px;">

<span style="margin-left:10px;">
Unidad Educativa AMIG-CHACO
</span>

</a>

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="menu">

<ul class="navbar-nav me-auto">

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
<a class="nav-link" href="direccion.php">
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

<li class="nav-item">
<a class="nav-link active"
href="uniforme.php">
Uniforme
</a>
</li>

</ul>

<div class="dropdown">

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

</div>

</div>

</nav>

<!-- CONTENIDO -->

<section class="contenedor">

<div class="titulo">

<h1>UNIFORMES ESCOLARES</h1>

<p>
Compra rápida y profesional de uniformes escolares
</p>

</div>

<div class="cards">

<!-- CARD 1 -->

<div class="card-uniforme">

<img src="img/uniforme1.jpg">

<div class="contenido">

<h2>Uniforme Formal</h2>

<p class="texto">
Uniforme elegante para estudiantes.
</p>

<div class="proveedores">

<button onclick="seleccionarProveedor(
'Proveedor Económico',
'Zona Central - Calle Sucre #145',
180,
220,
280
)">
Económico
</button>

<button onclick="seleccionarProveedor(
'Proveedor Premium',
'Av. Busch #455',
250,
310,
390
)">
Premium
</button>

</div>

</div>

</div>

<!-- CARD 2 -->

<div class="card-uniforme">

<img src="img/uniforme2.jpg">

<div class="contenido">

<h2>Uniforme Deportivo</h2>

<p class="texto">
Uniforme deportivo completo para educación física.
</p>

<div class="proveedores">

<button onclick="seleccionarProveedor(
'Proveedor Económico',
'Zona Norte - Calle Bolívar #210',
150,
190,
240
)">
Económico
</button>

<button onclick="seleccionarProveedor(
'Proveedor Premium',
'Av. Principal #900',
220,
280,
340
)">
Premium
</button>

</div>

</div>

</div>

</div>

</section>

<!-- MODAL -->

<div class="modal" id="modal">

<div class="modal-content">

<span class="cerrar"
onclick="cerrarModal()">
&times;
</span>

<h2 id="nombreProveedor"></h2>

<p id="direccion"></p>

<div class="precios">

<div>
Inicial
<br>
<span id="precioInicial"></span>
</div>

<div>
Primaria
<br>
<span id="precioPrimaria"></span>
</div>

<div>
Secundaria
<br>
<span id="precioSecundaria"></span>
</div>

</div>

<label>Nivel</label>

<select id="nivel">

<option value="0">Inicial</option>
<option value="1">Primaria</option>
<option value="2">Secundaria</option>

</select>

<label>Talla</label>

<select id="talla">

<option>XS</option>
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>

</select>

<label>Cantidad</label>

<input type="number"
id="cantidad"
value="1"
min="1">

<button class="comprar"
onclick="comprar()">

Agregar al carrito

</button>

</div>

</div>

<!-- CARRITO -->

<div class="carrito">

<h2>Carrito</h2>

<div id="itemsCarrito">

<p>
No hay productos agregados.
</p>

</div>

<hr>

<h4>
TOTAL:
Bs. <span id="totalCarrito">0</span>
</h4>

<button onclick="enviarCarritoWhatsApp()">
Enviar pedido por WhatsApp
</button>

<button onclick="descargarFacturaPDF()">
Descargar factura PDF
</button>

</div>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script src="js/uniforme.js"></script>

</body>
</html>