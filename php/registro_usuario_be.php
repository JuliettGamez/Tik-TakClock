<!--registro_usuario_be.php-->
<?php
session_start();
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

    $query_verificar = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $resultado_verificar = mysqli_query($conexion, $query_verificar);

    if (mysqli_num_rows($resultado_verificar) > 0) {
        echo '<script>
                 alert("El correo electrónico ya está registrado."); 
                 window.location="../index.html";
              </script>';
        exit();
    } else {
        $query_insertar = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
                           VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

        $ejecutar = mysqli_query($conexion, $query_insertar);

        if ($ejecutar) {
            echo '<script>
                     alert("Registro exitoso, ahora puede iniciar sesión."); 
                     window.location="../index.html";
                  </script>';
            exit();
        } else {
            echo "Error en el registro: " . mysqli_error($conexion);
        }
    }
}

mysqli_close($conexion);
?>
