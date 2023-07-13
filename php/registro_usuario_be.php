<?php

    include './conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    /* Encriptado de password */
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,password)
              VALUES('$nombre_completo','$correo','$usuario','$password')";


/* Verificar si el correo se repite */
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0) {
           echo '
            <script>
                alert("Este correo ya ha sido registrado");
                window.location = "../index.php";
            </script>
           ';
           exit();
           mysqli_close($conexion);
    }

/* Verificar si el Usuario se repite */
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya ha sido registrado, por favor intenta de nuevo");
                window.location = "../index.php";
            </script>
        ';
        exit();
        mysqli_close($conexion);
    }

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario creado con exito");
                window.location = "../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Intentalo de nuevo, el registro falló");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>

