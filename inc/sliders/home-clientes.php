<?php 
/** Columnistas destacados
------------------------------------------------------------------- */ 
?>
<!-- columnistas-destacados -->
<div class="Filmstrip inHome">
	
	<section class="FilmstripSlider u-contenedor">
		<!-- <div class="wrapper"> -->
		<h2 class="FilmstripSlider-titulo"><?php the_field('tituloClientes', 'option'); ?></h2>
		<div class="FilmstripSlider-sliderContenedor">
			<p class="FilmstripSlider-sliderTitulo"><?php the_field('subtituloClientes', 'option'); ?></p>
			<div id="slider-filmstrip" class="flexslider FilmstripSlider-contenido">
			  	<ul class="slides">
			  		<?php while(have_rows('clientesFelices', 'option')) : the_row(); ?>
			  		<li class="FilmstripSlider-slide">
			  			<a href="<?php the_sub_field('url', 'option'); ?>">
			  				<img class="FilmstripSlider-slideImagen" src="<?php the_sub_field('logo', 'option'); ?>" alt="">
			  			</a>
			  		</li>
			  		<?php endwhile; ?>
			  	</ul>
			</div>
		</div>

		<figure class="FilmstripSlider-figure">
			<img src="<?php echo get_plantilla_url().'/images/filmstrip.png'; ?>" alt="">
		</figure>

		<!-- </div> -->
	</section>

</div>
