<?php 
/** Bloques de testimonio. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalTestimony u-contenido">
	<!-- Contenedor -->
	<div class="PrimalTestimony-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h1 class="PrimalTestimony-titulo"><?php the_field('tituloTestimonios', 'option'); ?></h1>
		<h2 class="PrimalTestimony-subtitulo"><?php the_field('subtituloTestimonios', 'option'); ?></h2>
		<!-- bloque -->
		<div class="flexslider" id="testimonios-slider">
		  	<ul class="slides">
		  		<?php while(have_rows('bloquesTestimonios', 'option')) : the_row(); ?>
		  			<li class="PrimalTestimony-block">
		  				<blockquote class="PrimalTestimony-blockCita">
		  					<?php the_sub_field('cita', 'option'); ?>
		  				</blockquote>
		  				<a href="<?php the_sub_field('url', 'option'); ?>" class="PrimalTestimony-blockAuthor">
		  					<div class="PrimalTestimony-blockAuthor-info">
		  						<h4 class="PrimalTestimony-blockAuthor-name"><?php the_sub_field('autor', 'option'); ?></h4>
		  						<i class="fa fa-quote-left"></i>
		  						<p class="PrimalTestimony-blockMeta"><?php the_sub_field('descripcion', 'option'); ?></p>
		  					</div>
		  					<figure class="PrimalTestimony-blockFigure">
		  						<img src="<?php the_sub_field('foto'); ?>" alt="">
		  					</figure>
		  				</a>
		  			</li>
		  		<?php endwhile; ?>
		  	</ul>
		</div>
	</div>
</section>
