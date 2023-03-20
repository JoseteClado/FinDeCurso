<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Song Gifter</title>
</head>
<body>
    <div class="containerCancion">
        <section class="tarjetaCancion">
            <div class="logoCancion">
                <img src="../assets/img/svg/LogoAzul.svg" alt="">
                <h1>Song Gifter</h1>
            </div>
            <div class="recomendacion">
                <?php
                
                $host = "localhost";
                $user = "edib";
                $password = "edib";
                $db = "songgifter";

                $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

                $id = $_GET["id"];
                
                $consulta = "SELECT * FROM canciones WHERE id_categoria = $id ORDER BY RAND() LIMIT 1;";
                $stmt = $pdo->prepare($consulta);
                $stmt->execute();
                $resultado = $stmt->fetch();

                echo '<div style="background-image: url('.$resultado["imagen"].'); "class="imgCancionRecomendada"></div>';
                ?>
                <div class="textoCancionrecomendada">
               <div class="textoRecomendacion">

               <?php
                echo '<h2>Título: '.$resultado["nombre"].'</h2>';
                echo '<h2>Artista: '.$resultado["artista"].'</h2>';
                echo '<h2>Álbum: '.$resultado["album"].'</h2>';
                echo '<h2>Fecha: '.$resultado["fecha"].'<h2>';
                ?>
               </div>
                </div>
            </div>
            <?php
            echo '<a href="./cancion.php?id='.$id.'"><button class="botonCancion">Recomiéndame Otra</button></a>';
            ?>
        </section>
    </div>
     <!-- FOOTER -->
     <footer class="footerIndex">
        <h3 class="letrasFooter">Redes Sociales</h3>
        <div class="lineaFooter"></div>
        <div class="iconosFooter">
            <a href=""><img src="../assets/img/svg/twitter.svg" alt=""></a>
            <a href=""><img src="../assets/img/svg/instagram.svg" alt=""></a>
            <a href=""><img src="../assets/img/svg/facebook.svg" alt=""></a>
        </div>
        <h3 class="letrasFooter">Contáctanos</h3>
        <div class="telefonoFooter">
            <img src="../assets/img/svg/telefonoFooter.svg" alt="">
            <h3 class="letrasFooter">+34 637 71 51 65</h3>
        </div>
        <p>&copy;Song Gifter | 2023</p>
    </footer>
</body>
</html>