<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
    }
    label, input, textarea {
        display: block;
        margin-bottom: 10px;
    }
    input[type="submit"] {
        background-color: #AD001A;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    input[type="submit"]:hover {
        background-color: #8B0014;
    }
</style>

</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comentarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['USUARIO'];
    $correo = $_POST['CORREO'];
    $comentario = $_POST['COMENTARIO'];
    $fecha = date('Y-m-d H:i:s');

 
    $sql = "INSERT INTO COMENTARIOS (USUARIO, CORREO, COMENTARIO, FECHA) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("ssss", $usuario, $correo, $comentario, $fecha);

    if ($stmt->execute()) {
        echo "¡Comentario enviado correctamente!";
    } else {
        echo "Error al enviar el comentario: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

</body>
</html>

