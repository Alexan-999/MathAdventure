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
    <link rel="stylesheet" href="./assets/css/estilos-index.css">
</head>
<body>

    <header>
        <img src="./assets/images/elmo.png" class="img-logo" alt="Logo">
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

    <main>
        <div class="content-one">
            <div class="content-portada">
                <div class="content-item1">
                    <h4>Bienvenido a Math Adventure!
                    <h3>Revisa los resultado de tus alumnos</h3>
                    </h4>
                    <h2> Tu codigo de profesor es: #1111</h2>
                </div>
            </div>
        </div>
        <div class="content-two">
            <div class="content-details">
                <div class="content-item2">
                    <label class="icon-heart"></label>
                    <h4>Ver alumnos</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eius, dignissimos corporis aspernatur repellat doloribus quasi impedit iusto labore, architecto similique. Voluptates quidem a iusto odit veniam quaerat atque tempora?</p>
                </div>
                <div class="content-item2">
                    <label class="icon-laptop"></label>
                    <h4>Gestionar</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eius, dignissimos corporis aspernatur repellat doloribus quasi impedit iusto labore, architecto similique. Voluptates quidem a iusto odit veniam quaerat atque tempora?</p>
                </div>
                <div class="content-item2">
                    <label class="icon-support"></label>
                    <h4>Soporte</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi eius, dignissimos corporis aspernatur repellat doloribus quasi impedit iusto labore, architecto similique. Voluptates quidem a iusto odit veniam quaerat atque tempora?</p>
                </div>
            </div>
        </div>
        <div class="content-three">
            <div class="content-module">
                <h3>Impacto social</h3>
                <img src="./assets/images/educacion.jpg" alt="Educacion">
                <img src="./assets/images/videojuegos.jpg" alt="Videjuegos">
                <img src="./assets/images/Gamificacion.png" alt="Gamificacion">
            </div>
        </div>
    </main>
</body>
</html>