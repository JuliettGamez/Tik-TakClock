
<!--login_usuario_be.php-->
<?php
session_start();
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

    $query_validar = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
    $resultado_validar = mysqli_query($conexion, $query_validar);

    if (mysqli_num_rows($resultado_validar) > 0) {
        $_SESSION['correo'] = $correo;
        header("location: ../Menu.html");
        exit();
    } else {
        echo '<script>
                 alert("Correo electrónico o contraseña incorrectos."); 
                 window.location="../index.html";
              </script>';
        exit();
    }
}

mysqli_close($conexion);
?>
