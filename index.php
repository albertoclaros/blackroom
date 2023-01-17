<?php 
$active = "index";
include("header.php"); ?>

<!-- INICIO -->

<div class="expo-hero-fondo">
    <img src="img/expo-banksy.jpg" alt="Exposicion The Street is a Canvas">
    <div class="expo-hero">

        <div class="expo-hero-caja">
            <div class="expo-hero-contenido">
                <h1 class="expo-hero-titulo">The Street is a Canvas</h1>
                <p class="expo-hero-artista">banksy</p>
                <div class="expo-hero-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
                <div class="expo-hero-fecha"><p>1 abr ~ 30 abr</p></div>
            </div>
        </div>

        <a class="cta expo-hero-cta" href="the-room.php">
                    <div class="cta-icono"><i class="fas fa-angle-right"></i></div>
                    <div class="cta-texto"><p>exposiciones</p></div>
        </a>

    </div> <!-- FIN EXPO HERO -->
</div>


<div class="contenedor">


    <div class="bloque">

        <div class="bloque-imagen"><img src="img/sala-exposiciones.jpg" alt="Sala de exposiciones The Room"></div>
        

        <div class="bloque-contenido">
            <h3 class="bloque-titulo">Nuestro espacio, tu arte</h3>
            <p class="bloque-subtitulo">¿Quieres exponer tus obras en nuestra sala de exposiciones?</p>
            <p class="bloque-texto">The Room es la sala de exposiciones de moda en la ciudad. Una sala acondicionada para disfrutar del arte con seguridad en estos tiempos.</p>
            <div><a class="cta" href="nosotros.php">
                <div class="cta-icono"><i class="fas fa-angle-right"></i></div>
                <div class="cta-texto"><p>contactar</p></div>
            </a></div>
        </div>


    </div> <!-- FIN BLOQUE SALA -->


    <div class="titulo-dos">
        <h2>Exposiciones próximas</h2>
    </div>

    <div class="expo-proxima">

        <div class="expo-proxima-caja">
            
            <div class="expo-proxima-contenido">
                <h3 class="expo-proxima-titulo">Maestro del espacio</h3>
                <p class="expo-proxima-artista">andrei tarkovsky</p>
                <div class="expo-proxima-fecha"><p>1 may ~ 30 may</p></div>
                <img src="img/andrei.jpg" alt="Exposicion Maestro del espacio">
            </div>
        </div>

        <div class="expo-proxima-caja">
            <div class="expo-proxima-contenido">
                <h3 class="expo-proxima-titulo">Binocular</h3>
                <p class="expo-proxima-artista">alba cortés</p>
                <div class="expo-proxima-fecha"><p>1 jun ~ 30 jun</p></div>
                <img src="img/alba.jpg" alt="Exposicion Binocular">
            </div>
        </div>

    </div> <!-- FIN BLOQUE PROXIMAS EXPOSICIONES -->




    <div class="bloque habitaciones">

        <div class="bloque-imagen"><img src="img/habitaciones.jpg" alt="Habitacion doble de Blackroom"></div>

        <div class="bloque-contenido">
            <h3 class="bloque-titulo">Nuestro espacio, tu arte</h3>
            <p class="bloque-subtitulo">¿Quieres exponer tus obras en nuestra sala de exposiciones?</p>
            <p class="bloque-texto">The Room es la sala de exposiciones de moda en la ciudad. Una sala acondicionada para disfrutar del arte con seguridad en estos tiempos.</p>
            <div>
                <a class="cta" href="habitaciones.php">
                    <div class="cta-icono"><i class="fas fa-angle-right"></i></div>
                    <div class="cta-texto"><p>habitaciones</p></div>
                </a>
            </div>
        </div>


    </div> <!-- FIN BLOQUE HABITACIONES -->

</div> <!-- FIN contenedor -->


<div class="newsletter-fondo">
    <div class="newsletter">

        <h4 class="newsletter-titulo">Suscríbete a nuestra <span>newsletter</span></h4>

        <form action="/action_page.php" class="newsletter-formulario">
            <label for="email" class="newsletter-formulario-texto">Introduce tu email</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@email.com" class="newsletter-formulario-input">
            <div class="newsletter-boton">
                <a class="cta" href="#">
                    <div class="cta-icono correo"><i class="far fa-envelope"></i></div>
                    <div class="cta-texto"><p>suscribirme</p></div>
                </a>
            </div>
        </form>

    </div> <!-- FIN NEWSLETTER -->
</div>

<div class="contenedor">

    <div class="bloque-conjunto">
        <div class="bloque restaurante">

            <div class="bloque-imagen restaurante-img"><img src="img/restaurante.jpg" alt="Restaurante de Blackroom"></div>

            <div class="bloque-contenido">
                <h3 class="bloque-titulo">Arte directo al paladar</h3>
                <p class="bloque-texto">Nuestro chef es experto en cocina de vanguardia y ha sido galardonado dos años consecutivos con estrellas michelin.</p>
            </div>


        </div>

        <div class="bloque biblioteca">

            <div class="bloque-imagen biblioteca-img"><img src="img/biblioteca.jpg" alt="Biblioteca de Blackroom"></div>

            <div class="bloque-contenido">
                <h3 class="bloque-titulo">Leer es vivir dos veces</h3>
                <p class="bloque-texto">Un hogar sin libros es como un cuerpo sin alma. Por eso en Blackroom tenemos una biblioteca para que te sientas como en casa.</p>
            </div>


        </div>

    </div> <!-- FIN BLOQUE CONJUNTO -->

</div> <!-- FIN contenedor -->


<?php include("footer.php"); ?>