<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Comentarios</title>
    <style>
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

    </style>
</head>
<body>
    <h2>Deja tu comentario:</h2>
    <form action="CM3.php" method="post">
    <label for="USUARIO">Nombre:</label>
    <input type="text" id="USUARIO" name="USUARIO" required>

    <label for="CORREO">Correo:</label>
    <input type="email" id="CORREO" name="CORREO">

    <label for="COMENTARIO">Comentario:</label>
    <textarea id="COMENTARIO" name="COMENTARIO" rows="4" required></textarea>

    <input type="submit" value="Enviar comentario">
</form>

</body>
</html>
