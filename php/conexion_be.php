<!--conexion_be.php-->
<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = ""; 
$nombre_bd = "login_register_db";

$conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_bd);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
