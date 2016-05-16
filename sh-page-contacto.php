<?php
/**
 * Template Name: Contacto
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

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
			<section class="Contacto">
				<div class="u-contenedor">					
					<br>
					<h1 class="Contacto-titulo">Contáctanos</h1>
					<h2 class="Contacto-subtitulo"><strong>Construyamos juntos la mejor solución web para ti o tus clientes</strong></h2>
					<div class="Contacto-formulario">
						<?php echo do_shortcode(get_field('cf7Contacto', 'option')); ?>
					</div>
				</div>
				<br><br><br><br>
				<div class="sprite-2"></div>

			</section>


		</article>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>




