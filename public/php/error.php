<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Error al registrarse</title>
</head>
<body class="bodyRegistro">
<div class="containerRegistro">
    
    <?php
    
    $error = $_GET['error'];

    if ($error == 1) {
        echo "¡Error al efecutar el registro! Debe rellenar el campo nombre ";
    }

    if ($error == 2) {
        echo "¡Error al efecutar el registro! No puede haber numeros en el campo nombre";
    }

    if ($error == 3) {
        echo "¡Error al efecutar el registro! Debe rellenar el campo apellidos ";
    }

    if ($error == 4) {
        echo "¡Error al efecutar el registro! Debe introducir un correo válido";
    }

    if ($error == 5) {
        echo "¡Error al efecutar el registro! La contraseña debe tener como mínimo un número";
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
    if ($error == 9) {
        echo "¡Error al efecutar el inicio de sesión! El correo no pertence a un usuario existente";
    }
    if ($error == 10) {
        echo "¡Error al efecutar el inicio de sesión! Contraseña incorrecta";
    }
    if ($error == 11) {
        echo "¡Error al efecutar el cambio de datos! Contraseña incorrecta";
    }
    if ($error == 12) {
        echo "¡Error al efecutar el cambio de datos! El correo introducido ya esta cogido";
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