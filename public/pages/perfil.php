<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Perfil del usuario</title>
</head>
<body body class="bodyPerfil">
    <h1 class="tituloPerfil">Datos del  usuario</h1>
    <div class="containerPerfil">
        <div class="tarjetaDatosActuales">
            <h2 class="tituloDatosActuales" >Datos Actuales</h2>
            <?php
            session_start();

            echo "<p>Nombre: ".$_SESSION['nombre']."</p>";
            echo "<p>Apellidos: ".$_SESSION['apellidos']."</p>";
            echo "<p>Correo: ".$_SESSION['correo']."</p>";
            echo "<p>Contraseña: ******</p>";
           
            ?>
           <a href="./index.php"> <button class="botonRegistro">Volver al menú</button></a>
        </div>
        
        <div class="tarjetaCambiarDatos">
        <h2 class="tituloDatosActuales" >Cambiar Datos</h2>
        <form id="myForm" method="POST" action="../php/accion.php">
            <?php
        
        /* INPUT NUEVO NOMBRE */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='nombre'>Nuevo nombre</label>";
        echo '<input id="nombre" name="nombre" value="'.$_SESSION['nombre'].'">';
        echo '<div class="error errorNombre"></div>';
        echo "</div>";

        /* INPUT NUEVO APELLIDOS */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='apellidos'>Nuevo apellido</label>";
        echo '<input name="apellidos" id="apellidos" value="'.$_SESSION['apellidos'].'">';
        echo '<div class="error errorApellidos"></div>';
        echo "</div>";


        /* INPUT NUEVO CORREO */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='correo'>Nuevo Correo</label>";
        echo '<input name="correo" id="correo" value="'.$_SESSION['correo'].'">';
        echo '<div class="error errorCorreo"></div>';
        echo "</div>";
        
        /* INPUT CONTRASEÑA ANTERIOR */
        
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='contraseñaAnterior'>Escribe la anterior Contraseña</label>";
        echo '<input type="password" name="contraseñaAnterior" id="contraseñaAnterior">';
        echo '<div class="error errorContraseñaAnterior"></div>';
        echo "</div>";
        
         /* INPUT NUEVA CONTRASEÑA  */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='contraseña'>Escribe la nueva Contraseña</label>";
        echo '<input type="password" name="contraseña" id="contraseña">';
        echo '<div class="error errorContraseña"></div>';
        echo "</div>";
        
         /* INPUT REPETIR CONTRASEÑA  */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='confContraseña'>Repetir Contraseña</label>";
        echo '<input type="password" name="confContraseña" id="confContraseña">';
        echo '<div class="error errorConfContraseña"></div>';
        echo "</div>";
           
        
           
            ?>
            <div class="error coincidenContraseñas"></div>
            <button class="botonRegistro">Guardar Datos</button>
            </form>
        </div>

    </div>
</body>
<script src="../js/cambiarDatos.js"></script>
</html>