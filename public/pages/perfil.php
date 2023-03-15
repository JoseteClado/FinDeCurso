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
    <div class="containerPerfil">
        <h1 class="tituloPerfil">Datos del  usuario</h1>
        <div class="tarjetaDatosActuales">
            <h2 class="tituloDatosActuales" >Datos Actuales</h2>
            <?php
            session_start();

            echo "<p>Nombre: ".$_SESSION['nombre']."</p>";
            echo "<p>Correo: ".$_SESSION['correo']."</p>";
            echo "<p>Apellidos: ".$_SESSION['apellidos']."</p>";
            echo "<p>Contraseña: ******</p>";
           
            ?>
        </div>
        <div class="tarjetaDatosActuales tarjetaCambiarDatos">
        <h2 class="tituloDatosActuales" >Cambiar Datos</h2>
            <?php
        
        /* INPUT NOMBRE */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Nuevo nombre</label>";
        echo '<input name="nombreCambiar" value="'.$_SESSION['nombre'].'">';
        echo "</div>";

        /* INPUT APELLIDOS */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Nuevo apellido</label>";
        echo '<input name="nombreCambiar" value="'.$_SESSION['apellidos'].'">';
        echo "</div>";


        /* INPUT CORREO */
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Nuevo Correo</label>";
        echo '<input name="nombreCambiar" value="'.$_SESSION['password'].'">';
        echo "</div>";

        /* INPUT CONTRASEÑA */
        
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Escribe la anterior Contraseña</label>";
        echo '<input name="nombreCambiar">';
        echo "</div>";

        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Escribe la nueva Contraseña</label>";
        echo '<input name="nombreCambiar">';
        echo "</div>";
           
        echo "<div class='inputTarjetaCambiarDatos'>";
        echo "<label for='cambiarNombre'>Repetir Contraseña</label>";
        echo '<input name="nombreCambiar" >';
        echo "</div>";
           
           
           
            ?>
        </div>

    </div>
</body>
</html>