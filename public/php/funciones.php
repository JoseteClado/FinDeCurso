<?php 

function registro($pdo,$nombre,$apellidos,$correo,$contraseña,$confirmContraseña){

    $validacionFormulario = validarRegistro($pdo,$nombre,$apellidos,$correo,$contraseña,$confirmContraseña);

    /* En caso de que la funcion validar formulario haya devuelto un true se ejecutara el insert */
    if ($validacionFormulario == true) {
        
        $consulta = "INSERT INTO `usuarios` (`nombre`, `apellidos`, `correo`, `password`) VALUES (:nombre, :apellidos, :correo, :contrasena)";
        $stmt = $pdo->prepare($consulta);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contraseña);
        $resultado = $stmt->execute();

        if($resultado){
            

           
            
            return true;
            
        }else{

            
        }
        

    }

}

function validarRegistro($pdo,$nombre,$apellidos,$correo,$contraseña,$confirmContraseña){

    $error = 0;

     /* COMPRUEBO QUE SE HAYA INTRODUCIDO ALGO EN EL CAMPO NOMBRE */
    if(!isset($nombre) && empty($nombre)) {
        // El campo 'nombre' NO ha sido rellenado
        
        $error = 1;
        header("Location: error.php?error=$error");
        exit;
     }

      /* COMPRUEBO QUE NO HAYA NUMEROS EN EL CAMPO NOMBRE */
     if (preg_match('/^[A-Za-z]+$/', $nombre)) {
        
    } else {
        
        $error = 2;
        header("Location: error.php?error=$error");
        exit;

    }

    /* COMPRUEBO QUE SE HAYA INTRODUCIDO ALGO EN EL CAMPO APELLIDOS */
    if(!isset($apellidos) && empty($apellidos)) {
        // El campo 'nombre' NO ha sido rellenado
        
        $error = 3;
        header("Location: error.php?error=$error");
        exit;
     }

     /* COMPRUEBO QUE TENGA FORMATO DE EMAIL */
     if (preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $correo)) {
    } else {
       
        $error = 4;
        header("Location: error.php?error=$error");
        exit;
     }
    
     /* COMPRUEBO QUE EN LA CONTRASEÑA HAYA COMO MINIMO UN NUMERO */
     if (preg_match('/[0-9]/', $contraseña)) {
    } else {
        $error = 5;
        header("Location: error.php?error=$error");
        exit;
    }

    /* COMPRUEBO QUE AL MENOS TENGA 6 CARACTERES */
    if (strlen($contraseña) < 6) {
        $error = 6;
        header("Location: error.php?error=$error");
        exit;
    }
    
    /* COMPRUEBO QUE LAS CONTRASEÑAS SEAN IGUALES */
    if ($contraseña == $confirmContraseña){
    }else{
        $error = 7;
        header("Location: error.php?error=$error");
        exit;
    }

    $comprobacionCorreo = comprobarUsuarioRegistrado($pdo,$correo);

    if($comprobacionCorreo == true){

        $error = 8;
        header("Location: error.php?error=$error");
        exit;

    }

    return true;
     
}

function comprobarUsuarioRegistrado($pdo,$correo){

    $consulta = "SELECT `nombre` FROM usuarios WHERE correo = :correo";
    $stmt = $pdo->prepare($consulta);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    $resultado = $stmt->fetch();
    
    if ($resultado) {
        //Ya existe un usuario con ese correo
        return true;
    } else {
        //No existe un usuario con ese correo
        return false;
    }

}

function comprobarUsuario($pdo,$correo,$contraseña){

    $comprobacionUsuario = comprobarUsuarioRegistrado($pdo,$correo);

    //Error en caso de que no existe en la bd un usuario con el correo que se introduce en el login
    if ($comprobacionUsuario == false) {
        
        $error = 9;
        header("Location: error.php?error=$error");
        exit;

    }else{

        //En caso de que exista se comprobara la contraseña

        $consulta = "SELECT `password` FROM usuarios WHERE correo = '$correo'";
        $stmt = $pdo->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->fetch();

        //El resultado del select lo almaceno en esta variabe
        
        $contra = $resultado['password'];

        
        if ($contra == $contraseña) {
           //El intento de login cumple los requisitos

           $consulta = "SELECT `nombre` FROM usuarios WHERE correo = '$correo'";
           $stmt = $pdo->prepare($consulta);
           $stmt->execute();
           $resultado = $stmt->fetch();

           $nombre = $resultado["nombre"];

           session_start();

            $_SESSION['nombre'] = $nombre;
            $_SESSION['password'] = $correo;
            $_SESSION['correo'] = $contraseña;
            $_SESSION['logueado'] = true;


           header('location: ../pages/index.php');

        }else{

           
            $error = 10;
            header("Location: error.php?error=$error");
            exit; 

        }

    }

}

?>