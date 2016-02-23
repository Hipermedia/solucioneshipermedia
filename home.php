<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

	<!-- Cover -->
	<?php //primalCover(); ?>

	<?php primalSlider(); ?>

	<?php primalTabs(); ?>

	<?php imgridPortfolio(); ?>

	<?php primalTestimony();?>

	<?php starchiQuote(); ?>

	<?php primalBlocks(); ?>

	<!-- StarchiBloques -->
	<section class="StarchiQuote Newsletter u-contenedorCompleto">
		<div class="sprite">
			
		</div>
		<!-- Contenedor -->
		<div class="StarchiQuote-contenido u-contenedor">
			<div class="StarchiQuote-texto Newsletter-texto">
				<h2 class="StarchiQuote-textoCita"><strong>Suscríbete</strong> al newsletter</h2>
				<p>Recibe correos con promociones e información interesante para ti.</p>
			</div>

			<div class="StarchiQuote-aside Newsletter-aside">
				<input class="correo" type="text" placeholder="Introduce tu correo">
				<a class="StarchiQuote-contenidoBtn" href="">Me quiero suscribir</a>
			</div>
		</div>

		<div class="sprite-2">
			
		</div>
	</section>

	<?php filmstripSlider(); ?>
	
	<section class="Contacto">

		<div class="sprite">
			
		</div>
		
		<div class="u-contenedor">
			<p class="Contacto-titulo">Contáctanos</p>
			<h2 class="Contacto-subtitulo">Construyamos juntos la mejor solución web para ti o tus clientes</h2>
			<div class="Contacto-formulario">
				<?php echo do_shortcode(get_field('cf7Contacto', 'option')); ?>
			</div>
		</div>

		<div class="sprite-2">
		    
		</div>
	</section>



<?php get_footer(); ?>
