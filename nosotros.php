<?php 
$active = "nosotros";
include("header.php"); ?>

<!-- INICIO -->

<div class="contenedor nosotros">

    <div class="nosotros-texto">
        <div class="nosotros-titulo">    
            <h1>Nosotros</h1>
        </div>

        <p><strong>BlackRoom</strong> es un hotel urbano y moderno. No es un super hotel de una gran cadena, sino que apuesta por fidelizar a un tipo de cliente con <strong>intereses culturales.</strong></p>

        <p>Cuenta con generosos espacios de convivencia como <strong>restaurante, cafetería, sala de estar y biblioteca</strong>. Además cuenta con una sala de exposiciones que coloca a BlackRoom en la ruta de muchos turistas.</p>

        <p>Las <strong>exposiciones de la sala The Room</strong> son periódicas y buscan mostrar nuevas tendencias y artistas. El acceso a la sala es gratuito para sus clientes o reservando con cita previa desde la web.</p>
    </div>

    <form class="formulario" method="post">
    
        <input type="text" required id="nombre" name="nombre" placeholder="Nombre">
        <input type="email" required id="email" name="email" placeholder="Email">
        <textarea type="textarea" required id="texto" name="texto"required  placeholder="Escríbenos"></textarea>
        

        <button type="submit" class="formulario-boton">
            <div class="cta">
                <div class="cta-icono correo"><i class="far fa-envelope"></i></div>
                <div class="cta-texto"><p>contactar</p></div>
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
        <p>Nos pondremos en contacto con usted por Email lo antes posible</p>
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