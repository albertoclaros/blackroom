<?php 
$active = "reservar";
include("header.php"); ?>

<!-- INICIO -->

<div class="contenedor contacto">

    <div class="formulario-texto">
        <div class="contacto-titulo">    
            <h1>Reservar</h1>
        </div>

        <h2 class="contacto-subtitulo">¿Necesitas una habitación?</h2>
        <p class="contacto-texto">Rellena el siguiente formulario y nos pondremos en contacto para informarte de la disponibilidad en las fechas que solicites.</p>
    </div>

    <form class="formulario" method="post">
    
        <input type="text" required id="nombre" name="nombre" placeholder="Nombre">
        <input type="email" required id="email" name="email" placeholder="Email">
        <input type="number" required id="huespedes" name="huespedes"required  placeholder="Nº huéspedes" step="1" min="1">
        <ul class="formulario-fechas">
            <li>
                <label>Fecha de entrada</label>
                <input type="date" id="entrada" name="entrada" required min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
            </li>

            <li>
                <label>Fecha de salida</label>
                <input type="date" id="salida" name="salida" required min="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
            </li>
        </ul>
        

        <button type="submit" class="formulario-boton">
            <div class="cta">
                <div class="cta-icono correo"><i class="far fa-envelope"></i></div>
                <div class="cta-texto"><p>reservar</p></div>
            </div>
        </button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ventana-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="labelModal">¡Gracias por contactar!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Nos pondremos en contacto con usted por Email indicándole las habitaciones disponibles y el precio total en las fechas elegidas.</p>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-secondary boton-modal">Volver a inicio</a>
      </div>
    </div>
  </div>
</div>
    
    </form>
</div><!-- FIN contenedor -->

<?php include("footer.php"); ?>