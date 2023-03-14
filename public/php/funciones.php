<?php 

function registro($pdo,$nombre,$apellidos,$correo,$contraseña,$confirmContraseña){

    $validacionFormulario = validarRegistro($pdo,$nombre,$apellidos,$correo,$contraseña,$confirmContraseña);

    /* En caso de que la funcion validar formulario haya devuelto un true se ejecutara el insert */
    if ($validacionFormulario == true) {
        


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

      /* COMPRUEBO QUE SE HAYA INTRODUCIDO ALGO EN EL CAMPO NOMBRE */
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
    if (strlen($contraseña) <= 6) {
        $error = 6;
        header("Location: error.php?error=$error");
        exit;
    }
    
    /* COMPRUEBO QUE LAS CONTRASEÑAS SEAN IGUALES */
    if ($contraseña == $confirmContraseña){

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

    $consulta= "SELECT `nombre` FROM usuarios where correo = $correo";
    $conexion->prepare($consulta);
    $conexion->execute();

    if ($conexion->rowCount() > 0) {
        
        return true;

    }else{
        return false;
    }

}

?>