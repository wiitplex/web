<?php
include("includes/conexion.php");

$mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $rol = mysqli_real_escape_string($conn, $_POST["rol"]);

    // VERIFICAR SI EXISTE
    $verificar = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = mysqli_query($conn, $verificar);

    if (mysqli_num_rows($resultado) > 0) {

        $error = "El usuario ya existe";

    } else {

        // INSERTAR
        $insertar = "INSERT INTO usuarios(usuario,password,rol)
                     VALUES('$usuario','$password','$rol')";

        if(mysqli_query($conn,$insertar)){

            $mensaje = "Usuario registrado correctamente";

        }else{

            $error = "Error al registrar";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>

<link rel="stylesheet" href="css/register.css">

</head>

<body>

<div class="container-login">

    <div class="login-box">

        <h2>Registrar Usuario</h2>

        <form method="POST" action="register.php">

            <input type="text"
            name="usuario"
            placeholder="Usuario"
            required>

            <input type="password"
            name="password"
            placeholder="Contraseña"
            required>

            <select name="rol" required>

                <option value="">Tipo</option>

                <option value="estudiante">
                    Estudiante
                </option>

                <option value="profesor">
                    Profesor
                </option>

                <option value="admin">
                    Admin
                </option>

                <option value="padre">
                    Padre
                </option>

            </select>

            <button type="submit">
                Registrar
            </button>

        </form>

        <?php if($mensaje != ""){ ?>

            <p style="color:lime;text-align:center;margin-top:15px;">

                <?php echo $mensaje; ?>

            </p>

        <?php } ?>

        <?php if($error != ""){ ?>

            <p style="color:red;text-align:center;margin-top:15px;">

                <?php echo $error; ?>

            </p>

        <?php } ?>

        <div style="text-align:center;margin-top:20px;">

            <a href="login.php">
                Volver al login
            </a>

        </div>

    </div>

</div>

</body>
</html>