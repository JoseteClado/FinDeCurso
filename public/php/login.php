<?php

    $nombreLogin = $_POST["correo"];
    $contraseñaLogin = $_POST["contraseña"];

    /* Incluyo las funciones del archivo PHP funciones */
include 'funciones.php';

/* Variables de usuario con el que accedere a la base de datos */
$host = "localhost";
$user = "edib";
$password = "edib";
$db = "songgifter";


try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    comprobarUsuario($pdo,$nombreLogin,$contraseñaLogin);

}catch(PDOException $e) {

    echo 'No se ha podido conectar a la base de datos';

}

?>