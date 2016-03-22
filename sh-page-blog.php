<?php
/**
 * Template Name: Blog
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
				<?php the_content(); ?>	
			</div>
			<!-- Compartir en redes sociales -->

			<!-- PrimalBloques -->
			<section class="PrimalBlocks">
				<!-- Contenedor -->
				<div class="PrimalBlocks-contenido u-contenedor">

					<?php
					$cat = get_field('categoriaBlog', 'option');
					$posts = get_field('numeroBlog', 'option');

					$args = array( 'cat' => $cat, 'posts_per_page' => $posts ); 
					// the query
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

							<?php $fecha = get_the_time(get_option('date_format')); ?>

							<?php $dia = substr($fecha, 0, 2); ?>

							<?php $mes = substr($fecha, 2, 4); ?>

							<div class="PrimalBlocks-block">
								<figure class="PrimalBlocks-blockFigure">
									<img src="<?php echo $url; ?>" alt="">
								</figure>
								<div class="PrimalBlocks-blockHeading">
									<h3 class="PrimalBlocks-blockTitulo"><?php the_title(); ?></h3>
									<div class="PrimalBlocks-blockFecha">
										<span class="mes"><?php echo $mes; ?></span>
										<span class="dia"><?php echo $dia; ?></span>
									</div>
								</div>
								<div class="PrimalBlocks-blockDescripcion">
									<?php the_excerpt(); ?>
								</div>
								<!-- <a href="" class="PrimalBlocks-blockAction">Leer más</a> -->
								<div class="PrimalBlocks-blockCategorias">

									<p class="titulo">Categorías</p>

									<p class="categorias">

										<?php
										$categorias = get_the_category();
										$size = sizeof($categorias);
										$cuentita = 0;

										foreach( $categorias as $category) {

											$cuentita++;

											$padre = $category->category_parent;

											if ($padre!=0) {
										?>
												<a href="<?php echo home_url(); ?>/category/<?php echo $category->slug; ?>">
										<?php  
										    	echo $category->cat_name;
											}

											if ( $cuentita < $size && $cuentita > 1 ) {
												echo ",";
											}
										?>
												</a>
										<?php
										
										}
										?>
									</p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>	
				</div>
			</section>

			<?php anliSocialShare(); ?>
	   
		</article>
	<?php endwhile; // end of the loop. ?>

</section>


<?php get_footer(); ?>




