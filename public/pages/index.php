<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias Musicales</title>
    <!-- Links CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
      <!-- HAEDER -->
      <header class="headerIndex">
       
        <!-- HEADER DE MOVIL -->
    <div class="headerMovil">
         <!-- NAVBAR -->
     <nav class="navbar">
        <a class="icono1" href=""><img src="../assets/img/svg/icono1.svg" alt=""></a>
        <a class="icono2" href="./registro.html"><img src="../assets/img/svg/icono2.svg" alt=""></a>
        <a class="icono3" href=""><img src="../assets/img/svg/icono3.svg" alt=""></a>
    </nav>  
        <img class="logoIndex" src="../assets/img/svg/Logo Portada.png" alt="">
        <h1>Song Gifter</h1>
    </div>

    <!-- HEADER DE ESCRITORIO -->
    <div class="headerEscritorio">
        <nav id="navMovil" class="navbarEscritorio">
            <div class="logoNavbarEscritorio">
                <img class="logoNavbar" src="../assets/img/svg/logoBlanco.png" alt="">
                <p>Song Gifter</p>
            </div>
            <!-- PHP INDEX -->
            <?php

            session_start();

            // Comprobar si la sesión está activa
            if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true) {
           
                echo '<p>Hola!'.$_SESSION['nombre'].'</p>';

            }else{
                
                echo '<a style="padding-left: 60%;"  href="./registro.html"><p >Regístrate</p></a>';
                echo '<a href="./login.html"><p>Inicia Sesión</p></a>';
            }

            
            ?>
        </nav>
        <section class="bannerEscritorio">
            <div class="textoBanner">
                <div class="logoPortada">
                    <img class="iconoPortada" src="../assets/img/svg/logoBlanco.png" alt="">
                    <h1>SONG GIFTER</h1>
                </div>
                <h2>Te regalamos las mejores canciones.</h2>
            </div>
            <picture>
                <source  srcset="
                ../assets/img/desktop/Banner_Movil.webp    1x,
                ../assets/img/desktop/banner@2.webp  2x">
                <img class="imgBanner" src="" alt="Esta es la imagen del banner">
            </picture>
        </section>
        <button class="botonHeaderMovil" onClick="hacerScroll();">Recomiéndame</button>
    </div>

    </header>
    <div class="containerIndex">
      
        <!-- MAIN -->
        <main>
            <section class="rodeaCategorias">
                <section class="categorias">
                    <div class="letrasCategorias"><h2>Categorías Musicales</h2></div>
                   <a><div class="categoriaMusical categoriaMusical1">Blues</div></a>
                    <a href="./cancion.html"><div class="categoriaMusical categoriaMusical2">Clásica</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical3">Electrónica</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical4">Flamenco</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical5">Jazz</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical6">Metal</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical7">Pop</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical8">Rap</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical9">Reggaeton</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical10">Rock</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical11">Soul</div></a>
                    <a href=""><div class="categoriaMusical categoriaMusical12">Country</div></a>
                </section>
            </section>
            <section class="gustosMusicales">
                <h2 class="gustosMovil">Amplía tus gustos musicales</h2>
                <div class="shadowTarjetaGustos">
                    <div class="tarjetaGustos">
                        <div class="imagenGustos"></div>
                    </div>
                    <div class="reproductor"></div>
                </div>
             <div class="flexGustosTexto">
                <h2 class="gustosEscritorio">Amplía tus gustos musicales</h2>
                <p class="textoGustos">Con Song Gifter tienes la oportunidad de ampliar tu abanico musical de forma totalmente gratuita.  Lo único que debes hacer es elegir tu categoría musical favorita.</p>
             </div>
            </section>
            <section class="artistas">
                <h2>Conoce a los artistas más destacados</h2>
                
                <div class="sliderArtistas">
                    <div class="tarjetaArtista">
                        <div class="imagenArtista imagenArtista1"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                    
                    <div class="tarjetaArtista">
                        <div class="imagenArtista imagenArtista2"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                   
                    <div class="tarjetaArtista">
                        <div class="imagenArtista imagenArtista3"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                    
                    <div class="tarjetaArtista">
                        <div class="imagenArtista imagenArtista4"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                    
                    <div class="tarjetaArtista">
                        <div class="imagenArtista imagenArtista5"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                    
                    <div class="tarjetaArtista tarjetaArtistaFinal">
                        <div class="imagenArtista imagenArtista6"></div>
                        <p class="textoArtista">Bad Bunny</p>
                    </div>
                </div>
            </section>
        </main>
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
    <script src="../js/index.js"></script>