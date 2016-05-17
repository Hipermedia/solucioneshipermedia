<?php 
/** Bloque de llamada a la acción en portada
------------------------------------------------------------------- */ 
?>

<!-- CallToAction -->
<section class="CallToAction u-contenedorCompleto inHome">
	<!-- Sprite decorativo superior -->
	<div class="sprite"></div>
	<!-- Contenedor -->
	<div class="CallToAction-contenido u-contenedor">
		<div class="CallToAction-texto">
			<h2>¿Cómo podemos ayudarte? <strong>Escríbenos</strong></h2>
			<p>Háblanos sobre tu proyecto y nos pondremos en contacto contigo para construír la mejor solución para ti</p>
		</div>

		<div class="CallToAction-aside">
			<a class="CallToAction-contenidoBtn" href="" data-toggle="modal" data-target="#myModal">Escribir a Soluciones Hipermedia</a>
			<!-- <a href="">o leer un poquito más al respecto</a> -->
		</div>
	</div>

	<div class="sprite-2">
		
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content Contacto">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Solicitar una demostración</h4>
      </div>
      <div class="modal-body Contacto-formulario">
			<?php echo do_shortcode('[contact-form-7 id="1875" title="CF modal"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>