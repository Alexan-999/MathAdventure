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
    <link rel="stylesheet" href="./assets/css/footer.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

    <header>
        <img src="./assets/images/elmo.png" class="img-logo" alt="Logo">
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"></label>

       <nav class="menu">
            <ul>
                <li id="inicio"><a href="#" id="inicio2">Inicio</a></li>
                <li id="acercade"><a href="#" id="acercade2">Acerca de</a></li>
                <li id="misionvision"><a href="#" id="misionvision2">Misión y Visión</a></li>
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
        <div class="content-four">
            <div class="content-item4">
                <h4>Jugar y aprender ahora es posible</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid aut voluptate consectetur? Molestiae consequatur minus aut illo. Repellendus esse excepturi eum quia incidunt aperiam eaque reprehenderit sit soluta? Dolores, autem.</p>
            </div>
        </div>
    </main>
    <footer>
        <p>Proyecto modular INNI</p>
    </footer>

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/scroll.js"></script>

</body>
</html>