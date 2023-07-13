<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Debes de iniciar sesión");
            window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }
    /* session_destroy(); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Math Adventure</title>
</head>
<body>
    <h1>Hola esta es la página de inicio de Math Adventure!</h1>
    <a href="./php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>