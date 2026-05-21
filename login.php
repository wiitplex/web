<?php
session_start();
include("includes/conexion.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $rol = mysqli_real_escape_string($conn, $_POST["rol"]);

    $consulta = "SELECT * FROM usuarios 
                 WHERE usuario='$usuario' 
                 AND password='$password' 
                 AND rol='$rol'";

    $resultado = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($resultado) == 1) {

        $datos = mysqli_fetch_assoc($resultado);

        $_SESSION["id"] = $datos["id"];
        $_SESSION["usuario"] = $datos["usuario"];
        $_SESSION["rol"] = $datos["rol"];

        header("Location: index.php");
        exit();

    } else {
        $error = "Datos incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login Colegio</title>

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<div class="container-login">

    <div class="logo-box">
        <img src="img/logo.png">
        <h2>UNIDAD EDUCATIVA AMIG-CHACO</h2>
    </div>

    <div class="login-box">

        <h2>Iniciar Sesión</h2>

        <form method="POST" action="login.php">

            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>

            <select name="rol" required>
                <option value="">Tipo de usuario</option>
                <option value="admin">Admin</option>
                <option value="profesor">Profesor</option>
                <option value="estudiante">Estudiante</option>
                <option value="padre">Padre</option>
            </select>

            <button type="submit">Entrar</button>

        </form>

        <?php if ($error != "") { ?>
            <p id="error" style="display:block;"><?php echo $error; ?></p>
        <?php } ?>

        <div class="reg">
            <a href="register.php">Registrarse</a>
        </div>

    </div>

</div>

</body>
</html>