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
    <title>Math Adventure</title>
    <link rel="stylesheet" href="./assets/css/icons/fontello.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
</head>
<body>
    <h1>Hola esta es la página de inicio de Math Adventure!</h1>
    <p>Este es un parrafo</p>
    <!-- <a href="../php/cerrar_sesion.php">Cerrar Sesión</a> -->

    <header>
        <img src="assets/images/elmo.png" class="img-logo" alt="Logo">
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"></label>

       <nav class="menu">
            <ul>
                <li><a href="#" style="background:#df6666;color:white;border-radius:20px;">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Misión y Visión</a></li>
                <li><a href="./php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
       </nav>
    </header>
</body>
</html>