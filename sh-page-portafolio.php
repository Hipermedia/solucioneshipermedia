<?php
/**
 * Template Name: Portafolio
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
	   	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
	    <article class="Page u-contenido">	
			<!-- Imágen destacada -->
			<figure class="Post-featuredImage" style="background-image: url('<?php if($url) { echo $url; } else { the_field('imgBgPages', 'option'); } ?>');">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php else : ?>
					<img src="<?php the_field('imgBgPages', 'option'); ?>" alt="">
				<?php endif; ?>

				<figcaption class="u-contenedor">
					<!-- Título del artículo -->
					<h1 class="Post-title"><?php the_title(); ?></h1>
				</figcaption>
				<div class="sprite"></div>
			</figure>

			<div class="u-contenedor contenido-wp-multiproposito u-wp-contenido">
				<?php the_content(); ?>
			</div>			

			<section class="Portafolio-page u-contenedorCompleto">				

				<div class="Portafolio-heading u-contenedor">

					<h3>Una muestra de los proyectos que hemos hecho con dedicación, amor y mucho café</h3>

					<ul id="filters">
						<li><h3 id="unfilter-button">Todos</h3></li>
						<li><h3 id="filter-diseno">Programación de diseño</h3></li>
						<li><h3 id="filter-cobro">Cobro en línea</h3></li>
						<li><h3 id="filter-efectivo">Sitio efectivo</h3></li>
						<li><h3 id="filter-tienda">Tienda en línea</h3></li>
						<li><h3 id="filter-medida">Desarrollo a medida</h3></li>
						<li><h3 id="filter-noticias">Portal de noticias</h3></li>
					</ul>

				</div>

				<div class="imgrid Portafolio" id="imgrid-portfolio">
					<?php
					$cat = get_field('categoriaPortafolio', 'option');
					$num = 99;
					$args = array('cat' => $cat, 'posts_per_page' => $num); 
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php $cuentita = 0; ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php $cuentita++; ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
						<?php $categorias = get_the_category(); ?>
						<?php //var_dump($categorias); ?>
						<?php 
							$cat1 = $categorias[0]->slug;
							$cat2 = $categorias[1]->slug;
							$cat3 = $categorias[2]->slug;
							$cat4 = $categorias[3]->slug;
						?>
							<a class="<?php if($cuentita>4) { echo "u-hide"; } ?>" href="<?php the_permalink(); ?>">
								<figure class="filter-class Portafolio-block <?php echo $cat1." ".$cat2." ".$cat3." ".$cat4; ?>">
								    <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"/>
								    <figcaption>
								        <h2><?php the_title(); ?></h2>
								        <p class="description"><?php the_field('subtituloPost') ?></p>
								    </figcaption>
								</figure>
							</a>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
				<div class="separador-final"></div>
			</section>
		</article>
	<?php endwhile; // end of the loop. ?>

	<?php homeCallToAction(); ?>

<?php get_footer(); ?>




