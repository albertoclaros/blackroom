<?php 
$active = "theroom";
include("header.php"); ?>

<!-- INICIO -->


<div class="categoria-hero-fondo">
    <img src="img/sala-exposiciones.jpg" alt="Habitacion doble de Blackroom">
    <div class="categoria-hero">
        
        <div class="categoria-hero-bloque">
            <div class="categoria-hero-titulo"><h1>The Room</h1></div>
            <p class="categoria-hero-texto">El alma de Blackroom es su sala de exposiciones</p>
        </div>
            

        <div class="categoria-hero-cita">
            <div class="categoria-hero-cita-contenido">
                <i class="fas fa-quote-left icono"></i>
                <i class="fas fa-quote-right icono"></i>
                <blockquote>El arte nos permite encontrarnos y perdernos al mismo tiempo.</blockquote>
                <p>Thomas Merton</p>
            </div>
        </div>

    </div> <!-- FIN EXPO HERO -->

</div>


<div class="contenedor">

    <!-- EXPO ACTUAL -->
    <div class="titulo-dos">
        <h2>Exposición actual</h2>
    </div>

    <div class="expo-caja actual">
        <div class="expo-caja-imagen"><img src="img/expo-banksy.jpg" alt="Exposicion The Street is a Canvas"></div>
        <div class="expo-contenido">
            <div class="expo-contenido-texto">
            <h1 class="expo-titulo">The Street is a Canvas</h1>
            <p class="expo-artista">banksy</p>
            <div class="expo-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
            <div class="expo-fecha"><p>1 abr ~ 30 abr</p></div>
            </div>
        </div>
    </div>

    <!-- EXPOS PRÓXIMAS -->

    <div class="titulo-dos derecha">
        <h2>Exposiciones proximas</h2>
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

        <div class="expo-proxima-caja">
            <div class="expo-proxima-contenido">
                <h3 class="expo-proxima-titulo">Alma</h3>
                <p class="expo-proxima-artista">Francisco J Romero</p>
                <div class="expo-proxima-fecha"><p>1 jul ~ 30 jul</p></div>
                <img src="img/alma.jpg" alt="Exposicion Alma">
            </div>
        </div>

        <div class="expo-proxima-caja">
            <div class="expo-proxima-contenido">
                <h3 class="expo-proxima-titulo">De lo místico y lo absurdo</h3>
                <p class="expo-proxima-artista">JUANMA MORENO</p>
                <div class="expo-proxima-fecha"><p>1 ago ~ 30 ago</p></div>
                <img src="img/juanma.jpg" alt="Exposicion De lo místico y lo absurdo">
            </div>
        </div>

    </div> <!-- FIN BLOQUE PROXIMAS EXPOSICIONES -->


    <div class="titulo-dos">
        <h2>Exposiciones anteriores</h2>
    </div>

    <div class="expo-anteriores">

        <div class="expo-caja anteriores">
            <div class="expo-caja-imagen anteriores"><img src="img/california.jpg" alt="Exposicion California Dreamin’"></div>
            <div class="expo-contenido anteriores">
                <h4 class="expo-titulo">California dreamin’</h4>
                <p class="expo-artista">María Luisa Beneytez</p>
                <div class="expo-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
                <div class="expo-fecha anteriores"><p>1 mar ~ 30 mar</p></div>
            </div>
        </div>

        <div class="expo-caja anteriores">
            <div class="expo-caja-imagen anteriores"><img src="img/arcade.jpg" alt="Exposicion Arcade"></div>
            <div class="expo-contenido anteriores">
                <h4 class="expo-titulo">Arcade Paintings</h4>
                <p class="expo-artista">JONATHAN NOTARIO</p>
                <div class="expo-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
                <div class="expo-fecha anteriores"><p>1 feb ~ 30 feb</p></div>
            </div>
        </div>

        <div class="expo-caja anteriores">
            <div class="expo-caja-imagen anteriores"><img src="img/subliminal.jpg" alt="Exposicion Subliminal"></div>
            <div class="expo-contenido anteriores">
                <h4 class="expo-titulo">Subliminal</h4>
                <p class="expo-artista">SILVIA LERMO</p>
                <div class="expo-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
                <div class="expo-fecha anteriores"><p>1 ene  ~ 30 ene</p></div>
            </div>
        </div>

        <div class="expo-caja anteriores">
            <div class="expo-caja-imagen anteriores"><img src="img/ruido.jpg" alt="Exposicion El ruido manifiesto"></div>
            <div class="expo-contenido anteriores">
                <h4 class="expo-titulo">El ruido manifiesto</h4>
                <p class="expo-artista">Fernando Parrilla</p>
                <div class="expo-boton"><a href="the-street-is-a-canvas.php">Abrir</a></div>
                <div class="expo-fecha anteriores"><p>1 dic ~ 30 dic</p></div>
            </div>
        </div>

    </div> <!-- FIN BLOQUE ANTERIORES -->

    <div class="expo-boton anteriores"><a href="#">ver mas</a></div>

</div> <!-- FIN contenedor -->


<?php include("footer.php"); ?>