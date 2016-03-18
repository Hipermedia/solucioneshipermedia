<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="u-contenedorCompleto">

	<?php while ( have_posts() ) : the_post(); ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
	    <article class="Post">	
			<!-- Imágen destacada -->
			<figure class="Post-featuredImage" style="background-image: url('<?php if($url) { echo $url; } else { the_field('destacadaDefault', 'option'); } ?>');">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php else : ?>
					<img src="<?php the_field('destacadaDefault'); ?>" alt="">
				<?php endif; ?>

				<figcaption class="u-contenedor">
					<!-- Título del artículo -->
					<h1 class="Post-title"><?php the_title(); ?></h1>
				</figcaption>
				<div class="sprite"></div>
			</figure>

			<div class="u-contenedor">
				<!-- Contenido -->
				<div class="contenido-wp">
					<?php the_content(); ?>	
				</div>
				<!-- Compartir en redes sociales -->
				<?php anliSocialShare(); ?>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>
	<?php //get_sidebar(); ?>
</section>
<?php get_footer(); ?>
