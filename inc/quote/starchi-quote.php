<?php 
/** Sección de texto. Estilo Starchi
------------------------------------------------------------------- */ 
?>

<!-- StarchiBloques -->
<section class="StarchiQuote u-contenedorCompleto">

	<div class="sprite">
		
	</div>
	<!-- Contenedor -->
	<div class="StarchiQuote-contenido u-contenedor">
		<div class="StarchiQuote-texto">
			<h2 class="StarchiQuote-textoCita"><strong>Solicita</strong> sin compromiso <strong>una demostración</strong></h2>
			<p>en una video llamada por Skype o Hangout te mostramos las posibilidades que ofrecemos para tu proyecto</p>
		</div>

		<div class="StarchiQuote-aside">
			<a class="StarchiQuote-contenidoBtn" href="" data-toggle="modal" data-target="#myModal">Quiero solicitar una demostración</a>
			<!-- <a href="">o leer un poquito más al respecto</a> -->
		</div>
	</div>

	<div class="sprite-2">
		
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Solicitar una demostración</h4>
      </div>
      <div class="modal-body">
			<?php echo do_shortcode('[contact-form-7 id="1875" title="CF modal"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>