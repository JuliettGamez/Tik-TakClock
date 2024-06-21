<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    .top-border {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.5);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
        }
        .top-border button {
            font-family:'Times New Roman', Times, serif;
            background-color: transparent;
            color: white;
            border: 1px solid white;
            padding: 10px 20px;
            font-size: 1em;
            margin-right: 20px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            border-radius: 5px;
        }
        .top-border button:hover {
            background-color: white;
            color: #0010c5;
        }
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #E3F2FD;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .comments {
        width: 100%;
        max-width: 800px;
        margin-top: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .comment {
        border-bottom: 1px solid #ccc;
        padding: 15px 0;
        margin-bottom: 15px;
        position: relative;
    }

    .comment:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    .comment h3 {
        color: #0D47A1;
        margin-bottom: 5px;
        font-size: 1.2em;
    }

    .comment p {
        margin-top: 5px;
        color: #666;
        font-size: 1em;
    }

    .comment .meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9em;
        color: #888;
    }

    .comment .user {
        font-weight: bold;
    }

    .comment .hide-btn {
        background-color: transparent;
        border: none;
        color: #0D47A1;
        cursor: pointer;
        font-size: 0.9em;
        padding: 0;
        position: absolute;
        top: 15px;
        right: 0;
    }

    .add-comment {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 20px;
        max-width: 600px;
        width: 100%;
        animation: slideIn 1s ease-in-out;
    }

    .add-comment h2 {
        color: #0D47A1;
        margin-bottom: 10px;
        font-size: 1.5em;
    }

    .add-comment label, .add-comment textarea, .add-comment input[type="text"], .add-comment input[type="email"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .add-comment textarea {
        height: 100px;
    }

    .add-comment input[type="submit"] {
        background-color: #0D47A1;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1em;
    }

    .add-comment input[type="submit"]:hover {
        background-color: #0A3871;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

   
    @media (max-width: 768px) {
        .comments {
            margin-top: 0;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 480px) {
        .comments {
            margin-top: 0;
            margin-bottom: 60px;
        }

        .add-comment {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            margin: 0;
            border-radius: 0;
            padding: 10px; 
        }

        .add-comment h2 {
            font-size: 1em; 
        }

        .add-comment label, .add-comment textarea, .add-comment input[type="text"], .add-comment input[type="email"] {
            font-size: 0.8em;
            padding: 8px; 
        }

        .add-comment textarea {
            height: 80px; 
        }

        .add-comment input[type="submit"] {
            font-size: 0.9em; 
            padding: 8px 0; 
        }
        .top-border {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.5);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
        }
        .top-border button {
            font-family:'Times New Roman', Times, serif;
            background-color: transparent;
            color: white;
            border: 1px solid white;
            padding: 10px 20px;
            font-size: 1em;
            margin-right: 20px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            border-radius: 5px;
        }
        .top-border button:hover {
            background-color: white;
            color: #0010c5;
        }
    }
    </style>
</head>
<body>
<div class="top-border">
        <form action="Menu.html">
            <button type="submit">VOLVER</button>
        </form>
    </div>
<div class="comments">
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

$sql = "SELECT ID, USUARIO, CORREO, COMENTARIO, FECHA FROM COMENTARIOS ORDER BY FECHA DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="comment" id="comment-' . $row["ID"] . '">';
        echo '<h3>Comentario #' . $row["ID"] . '</h3>';
        echo '<p><strong>' . $row["USUARIO"] . '</strong> el ' . $row["FECHA"] . '</p>';
        echo '<p>Correo: ' . $row["CORREO"] . '</p>';
        echo '<p>' . $row["COMENTARIO"] . '</p>';
        echo '<button class="hide-btn" onclick="hideComment(' . $row["ID"] . ')">Ocultar</button>';
        echo '</div>';
    }
} else {
    echo '<p>No hay comentarios aún.</p>';
}

$conn->close();
?>
</div>

<div class="add-comment">
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
</div>

<script>
function hideComment(id) {
    var comment = document.getElementById('comment-' + id);
    if (comment.style.display === 'none') {
        comment.style.display = 'block';
    } else {
        comment.style.display = 'none';
    }
}
</script>
</body>
</html>
