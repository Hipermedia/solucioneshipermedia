<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="u-contenedorCompleto">
	<article class="Post">	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if (in_category( '2' )) {	// Preguntamos si él post es de portafolio ?>

				<?php get_template_part('content','portafolio'); //Importamos la plantilla de post de portafolio  ?>
					
			<?php } else {  ?>
			
				<?php get_template_part('content','single'); //Importamos la plantilla de post por default ?>

			<?php } ?>	

		<?php endwhile; ?>
		<?php comments_template(); ?>
	</article>
</section>

<?php get_footer(); ?>
