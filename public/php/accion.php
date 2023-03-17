<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Error al registrarse</title>
</head>
<body class="bodyRegistro">
<div class="containerRegistro">

<?php

include 'funciones.php';

/* Variables de usuario con el que accedere a la base de datos */
$host = "localhost";
$user = "edib";
$password = "edib";
$db = "songgifter";

//Procedencia del formulario
$ruta = $_SERVER['HTTP_REFERER'];
$ultimoArchivo = basename($ruta);

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);


    /* REGISTRO */
    if ($ultimoArchivo == "registro.html") {

        /* Recojo las variables del formulario */
        $nombreRegistro = $_POST["nombre"];
        $apellidosRegistro = $_POST["apellidos"];
        $correoRegistro = $_POST["correo"];
        $contraseñaRegistro = $_POST["contraseña"];
        $confContraseñaRegistro = $_POST["confContraseña"];

        $registradoValidacion = registro($pdo,$nombreRegistro,$apellidosRegistro,$correoRegistro,$contraseñaRegistro,$confContraseñaRegistro);
        
        if ($registradoValidacion) {
            
            echo "Te has registrado correctamente";
            echo "<a href='../pages/login.html'><button>Inicia Sesión</button></a>";
        }

    }

    if ($ultimoArchivo == "login.html") {
        
        $nombreLogin = $_POST["correo"];
        $contraseñaLogin = $_POST["contraseña"];

        comprobarUsuario($pdo,$nombreLogin,$contraseñaLogin);
    }

    if ($ultimoArchivo == "index.php") {
        cerrarSesion();
    }

    if($ultimoArchivo == "perfil.php"){

        session_start();

        $nombreRegistro = $_POST["nombre"];
        $apellidosRegistro = $_POST["apellidos"];
        $correoRegistro = $_POST["correo"];
        $contraseñaRegistro = $_POST["contraseña"];
        $confContraseñaRegistro = $_POST["confContraseña"];
        $contraAnterior = $_POST["contraseñaAnterior"];

        echo $contraAnterior;
        echo $_SESSION['password'];


        cambiarDatos($pdo,$nombreRegistro,$apellidosRegistro,$correoRegistro,$contraseñaRegistro,$confContraseñaRegistro,$contraAnterior); 

    }

}catch(PDOException $e) {
       
    echo "<h1>Error, no se pudo conectar a la base de datos</h1>"; 

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