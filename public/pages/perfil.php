<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body body>
    <div class="containerPerfil">
        <h1 class="tituloPerfil">Datos del perfil de usuario</h1>
        <div class="tarjetaDatosActuales">
            <?php
            session_start();

            echo "<p>Nombre: ".$_SESSION['nombre']."</p>";
            echo "<p>Correo: ".$_SESSION['correo']."</p>";
            echo "<p>Apellidos: ".$_SESSION['apellidos']."</p>";
           
            ?>
        </div>
    </div>
</body>
</html>