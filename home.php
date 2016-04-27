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
	<?php primalSlider(); ?>

	<?php primalTabs(); ?>

	<?php imgridPortfolio(); ?>

	<?php primalTestimony();?>

	<?php starchiQuote(); ?>

	<?php primalBlocks(); ?>

	<!-- StarchiBloques -->
	<section class="StarchiQuote Newsletter u-contenedorCompleto">
		<div class="sprite"></div>
		<form class="StarchiQuote-contenido u-contenedor" action="http://www.solucioneshipermedia.com/sendy/subscribe" method="POST" accept-charset="utf-8" id="sendy-wp-form">
			<div class="StarchiQuote-texto Newsletter-texto">
				<h2 class="StarchiQuote-textoCita"><strong>Suscríbete</strong> al newsletter</h2>
				<p>Recibe correos con promociones e información interesante para ti.</p>
			</div>
			<div class="StarchiQuote-aside Newsletter-aside">
				<div class="input">
		    		<input type="text" name="email" id="email" placeholder="Escribe aquí tu correo" class="correo">
					<i class="fa fa-paper-plane"></i>
					<input type="hidden" name="Dominio" id="Dominio" value="http://www.solucioneshipermedia.com/">
					<input type="hidden" name="Fechadeingreso" id="Fechadeingreso" value="<?php echo date("Y-m-d"); ?>">
					<input type="hidden" name="list" value="pQsw4XXnRyQodpFe6nAjGA">
				</div>
		    	<input class="StarchiQuote-contenidoBtn c-input" type="submit" name="submit" id="submit" value="Me quiero suscribir">
			</div>
		</form>
		<div class="sprite-2"></div>
	</section>

	<?php filmstripSlider(); ?>
	
	<a name="shcontacto"></a>
	<section class="Contacto">
		<div class="sprite"></div>
		<div class="u-contenedor">
			<p class="Contacto-titulo">Contáctanos</p>
			<h2 class="Contacto-subtitulo">Construyamos juntos la mejor solución web para ti o tus clientes</h2>
			<div class="Contacto-formulario">
				<?php echo do_shortcode(get_field('cf7Contacto', 'option')); ?>
			</div>
		</div>
		<div class="sprite-2"></div>
	</section>

<?php get_footer(); ?>
