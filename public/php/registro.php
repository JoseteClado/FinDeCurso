<?php



/* Recojo las variables del formulario */
$nombreRegistro = $_POST["nombre"];
$apellidosRegistro = $_POST["apellidos"];
$correoRegistro = $_POST["correo"];
$contraseñaRegistro = $_POST["contraseña"];
$confContraseñaRegistro = $_POST["confContraseña"];

/* Incluyo las funciones del archivo PHP funciones */
include 'funciones.php';

/* Variables de usuario con el que accedere a la base de datos */
$host = "localhost";
$user = "edib";
$password = "edib";
$db = "songgifter";

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    
    registro($pdo,$nombreRegistro,$apellidosRegistro,$correoRegistro,$contraseñaRegistro,$confContraseñaRegistro);
  

} catch(PDOException $e) {
   
    echo "<h1>Error, no se puedo conectar a la base de datos</h1>"; 

}


?>