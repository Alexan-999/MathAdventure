<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: inicio.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathAdventure Platform</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,
    wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">


</head>
<body>

    <main>

        <div class="contenedor-todo">
            <div class="caja-trasera">
                <div class="caja-trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn-iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja-trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate iniciar sesión</p>
                    <button id="btn-registrarse">Regístrarse</button>
                </div>
            </div>
            
                <!-- Formulario de Loggin y Registro -->
            <div class="contenedor-login-register">
                <!-- Loggin -->
                <form action="./php/login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Inciar sesión</h2>
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="./php/registro_usuario_be.php" method="POST" class="formulario-register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="./assets/js/script.js"></script>
    
</body>
</html>