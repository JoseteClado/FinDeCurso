<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error al registrarse</title>
</head>
<body class="bodyRegistro">
<div class="containerRegistro">

    <?php
    
    $error = $_GET['error'];

    if ($error == 1) {
        
    }

    if ($error == 2) {
        
    }

    if ($error == 3) {
        
    }

    if ($error == 4) {
        
    }

    if ($error == 5) {
        
    }

    if ($error == 6) {
        echo "¡Error al efecutar el registro! La contraseña debe tener al menos 6 caracteres";
    }

    if ($error == 7) {
        echo "¡Error al efecutar el registro! Las contraseñas deben ser iguales";
    }

    if ($error == 8) {
        echo "¡Error al efecutar el registro! Ya existe un usuario con el correo que introdujiste";
    }

    ?>
</div>
<div class="decoracionRegistro">
        <h2>Song Gifter</h2>
        <img class="imgDecoracionRegistro" src="../assets/img/svg/LogoAzul.svg" alt="">
        <h3>Te regalamos las mejores canciones</h3>
    </div>
</body>
</html>